<?php
/**
 * sculife数据操作模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class HandleBaseController extends Controller {
    public $tag=[];
    public $allTag;
    public function _initialize(){
        $this->getALLTag();
    }

    /**
     * 获取所有文章以及文章的分页显示
     * @param $db 数据库链接句柄
     * @param $config 配置信息：
     *                   'map' => array; 查询条件
     *                   'limit' => int; 分页条数
     *                   'getField'= > ; 需要查询的字段
     * @return array ：
     *              'list' => array ;返回查询结果
     *              'page' => html; 返回分页结果
     */
    public function getAll($db,$config){

        $count      = $db->where($config['map'])->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,$config['limit']);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($config['map'])->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->getField($config['getField']);
        return $data=[
            'list'=>$list,
            'page'=>$show
        ];
    }

    /**
     * 查询文章目录
     * @param $map 查询的条件
     * @param $limit 返回数目
     * @return array 返回一个文章的目录
     */
    public function getArticle($map,$limit){
        $article=M('article');
        $data=$article->where($map)->limit($limit)->order('number DESC')->getField('id,title,tid,ctime');
        foreach($data as $k=>$v){
            $this->tag='';
            $this->getOneTag($v['tid']);
            $data[$k]['tag']=$this->tag;
        }
        return $data;
    }

    /**
     * 查询系统日志
     * @param $map 查询的条件
     * @param $limit 返回数目
     * @return array 返回系统日志
     */
    public function getLog($map,$limit){
        $log=M('log');
        return $log->where($map)->order('id DESC')->limit($limit)->select();
    }

    /**
     * 查询配置文件
     * @param $map 查询的条件
     * @param $limit 返回的数目
     * @return mixed 返回的系统日志
     */
    public function getConfig($map,$limit){
        $config=M('config');
        $data=$config->where($map)->order('id DESC')->limit($limit)->select();
        /*------------------对pattern进行处理-----------------*/
        foreach($data as $k => $v){
            $this->tag='';
            $this->getOneTag($v['tid']);
            $data[$k]['tag']=$this->tag;
            $pattern=explode('#',trim($v['pattern']));
            foreach($pattern as $key => $val){
                $pattern[$key]=trim($val);
            }
//            print_r($pattern);
            $data[$k]['pattern']=$pattern;
        }
//        print_r($data);
        return $data;
    }

    /*-------根据id获取所有的父类，开销比较大，后面再改------------*/
    public function getOneTag($id){
        $tag1=M('tag');
        $data=$tag1->where('id='.$id)->select();
        $data=$data[0];
        if($data['level']!=1){
            $this->getOneTag($data['fid']);
        }
        $this->tag[]=$data;
    }


    public function getTag($map){
        $tag1=M('tag');
        return $data=$tag1->where($map)->select();
    }

    public function getALLTag(){
        $tag1=M('tag');
        $data=$tag1->where()->select();
        $this->allTag=$tree=$this->genTree($data);
    }

    /*------------------树形话分类信息--------------------*/
    public function genTree($items,$id='id',$pid='fid',$son = 'son'){
        $tree = array(); //格式化的树
        $tmpMap = array();  //临时扁平数据

        foreach ($items as $item) {
            $tmpMap[$item[$id]] = $item;
        }

        foreach ($items as $item) {
            if (isset($tmpMap[$item[$pid]])) {
                $tmpMap[$item[$pid]][$son][] = &$tmpMap[$item[$id]];
            } else {
                $tree[] = &$tmpMap[$item[$id]];
            }
        }
        unset($tmpMap);
        return $tree;
    }

}