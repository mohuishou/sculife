<?php
/**
 * 川大公告牌后台管理模块之抓取文章模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;
class ArticleController extends ArticleBaseController {

    public function spiderArticle($tid){
        $handle=new HandleController();
        if(!empty($category)) $map['tid']=$tid;
        $config=$handle->getConfig($map);
       // print_r($config);
        foreach($config as $k => $v){
            if($v['status']==1){
                // print_r($v);
                $this->grabAllArticle($v);
            }else{
                $this->ajaxReturn(['status'=>0,'message'=>'设置有误']);
            }
        }
        $this->ajaxReturn(['status'=>1,'message'=>'程序执行成功，请查看日志']);
    }
}