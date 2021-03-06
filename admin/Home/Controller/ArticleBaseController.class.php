<?php
/**
 * sculife后台管理模块之抓取文章基础模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class ArticleBaseController extends Controller {

	/**
	 * 获取具体文章
	 * @param $config 配置信息：
	 * 					mainSite => 需要采集的网站的主域名，包含http://
	 *					url => 需要采集的网站的地址（采集级目录）
	 * 					tid=> 标签id,如 青春川大，学工部
	 *					pattern => 第一次采集的时候的正则
	 *					pattern2 => 采集子网址的正则
	 * 					pattern3 => 详细页的路径转换,选填
	 */
	public function grabAllArticle($config){
		/*------------链接数据库-------------*/
		$article=M('article');
		$map['tid']=$config['tid'];
		$maxNo=$article->where($map)->max('number');

		/*------------------将数据保存到数据库-------------------*/
		$data=$this->grabArticle($config,$maxNo);

		$logMsg='';
		foreach($config[tag] as $k => $v){
			$logMsg .=$v['name'].'-';
		}

//        print_r($data);
		if (count($data)) {
			if($article->addAll($data)){
				$this->writeLog($logMsg."最新消息抓取成功");
			}
		}else{
			$this->writeLog($logMsg."没有最新的消息");
		}
	}

	/**
	 * 获取文章
	 * @param $config 配置信息：
	 * 					mainSite => 需要采集的网站的主域名，包含http://
	 *					url => 需要采集的网站的地址（采集级目录）
	 * 					tid => 标签id,如 青春川大，学工部
	 *					pattern => 第一次采集的时候的正则
	 *					pattern2 => 采集子网址的正则
	 * 					pattern3 => 详细页的路径转换,选填
	 * @param $maxNo 最后的一条消息的标识符
	 * @return array 返回存入数据库的数组
	 */
	public function grabArticle($config,$maxNo){
		$data=[];
		$catalog=$this->spiderData($config['url'],$config['pattern'][0]);//获取目录
		// print_r($config);


		/*------------对获取的数据进行排序，根据number----------------*/
		$no=$catalog[2];
		rsort($no);
		if($no[0]>$maxNo){
			/*----------------获取目录下的所有文章----------*/
			foreach ($catalog[1] as $key => $value) {
				if($catalog[2][$key]>$maxNo){
					$content=$this->spiderData($config['mainsite'].$value,$config['pattern'][1]);
//					print_r($config['mainsite'].$value);
					/*------如果需要，扫描文本中是否有相对路径的链接，并转换----*/
					if(isset($config['pattern'][2])){
						$content=$this->urlCov($config['mainsite'],$content[0][0],$config['pattern'][2]);
					}else{
						$content=$content[0][0];
					}

					/*--------------将数据保存到数组中--------------*/
					$data[]=[
						'ctime'=>date('Y-m-d H:i:s',time()),
						'tid'=>$config['tid'],
						'content'=>$content,
						'number'=>$catalog[2][$key],
						'title'=>$catalog[3][$key],
						'website'=>$config['mainsite'].$value
					];
				}
			}
		}
		return $data;
	}



	/**
	 * 将日志写入数据库
	 * @param $info 需要输入的信息
	 *
	 */
    public function writeLog($info){
		$log=M('log');
		$data=[
			'message'=>$info,
			'ctime'=>date('Y-m-d H:i:s',time())
		];
//		print_r($data);
		$log->add($data);
	}

    /**
     * [urlCov 扫秒文本中的路径转换为完全的网址]
     * @param  [type] $mainUrl 主域名
     * @param  [type] $str     需要扫描的字符串
     * @param  [type] $pattern 正则,替换出的字符为路径+'
     * @return [String]        返回替换过网址的文本
     */
    public function urlCov($mainUrl,$str,$pattern){
    	if(preg_match_all($pattern,$str,$url)){
    		$replacement=$mainUrl.$url[0][0].'"';
    		return preg_replace($pattern, $replacement, $str);
    	}else{
    		return $str;
    	}
    }
    	

    /**
     * 从指定网站中采集数据
     * @param [String] $url 需要采集的网址
     * @param [String] $pattern 采集网站的正则
     * @return [array] $link  [返回采集到的数组]
     */
    public function spiderData($url,$pattern){
    	$ch=curl_init();
		// $url="http://xsc.scu.edu.cn/";
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$data=curl_exec($ch);
		 // print_r($data);
		// $pattern='/<a href="(\/index.php\/main\/web\/notice\/detail\/i\/(.+?))">(.+?)<\/a>/';
		preg_match_all($pattern,$data,$link);
//		 print_r($link);
		return $link;
    }
}