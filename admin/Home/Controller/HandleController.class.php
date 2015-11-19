<?php
/**
 * sculife数据处理模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class HandleController extends HandleBaseController {
    public $son;

    public function getAllArticle($tid){
        $this->getSon($this->allTag,$tid);
        if(is_array($this->son['son'])){
            foreach($this->son['son'] as $k=> $v){
                $map['tid']=$v['id'];
                $config['tag']=$v['name'];
            }
        }else{
            $map['tid']=$this->son['id'];
            $config['tag']=$this->son['name'];
        }
        $article=M('article');
        $config=[
            'map'=>$map,
            'limit'=>13,
            'getField'=>'id,tid,title,ctime'
        ];

        return $this->getAll($article,$config);
    }

    public function getAllLog(){
        $log=M('log');
        $logConfig=[
            'limit'=>'15',
            'getField'=>'id,message,ctime'
        ];
        return $youthNotice=$this->getAll($log,$logConfig);
    }
    public function getSon($arr,$id){
        if(is_array($arr)){
            foreach($arr as $k => $v) {
                if ($v['id'] != $id) {
                    $this->getSon($v['son'], $id);
                } else {
                    $this->son=$v;
                }
            }
        }
    }
}
