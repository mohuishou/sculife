<?php
/**
 * sculife后台管理模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class HandleController extends HandleBaseController {
    public function getAllNews($tag){
        $article=M('article');
        if($tag=='youth'){
            $youthNewsConfig=[
                'map'=>[
                    'tag'=>'青春川大',
                    'category'=>'团情快讯'
                ],
                'limit'=>'15',
                'getField'=>'id,tag,category,title,ctime'
            ];
            return $youthNews=$this->getAll($article,$youthNewsConfig);

        }elseif($tag=='xsc'){
            $xscNewsConfig=[
                'map'=>[
                    'tag'=>'学工部',
                    'category'=>'新闻'
                ],
                'limit'=>'15',
                'getField'=>'id,tag,category,title,ctime'
            ];

            return $xscNews= $youthNews=$this->getAll($article,$xscNewsConfig);

        }
    }

    public function getAllNotice($tag){
        $article=M('article');
        if($tag=='youth'){
            $youthNoticeConfig=[
                'map'=>[
                    'tag'=>'青春川大',
                    'category'=>'公告'
                ],
                'limit'=>'15',
                'getField'=>'id,tag,category,title,ctime'
            ];
            return $youthNotice=$this->getAll($article,$youthNoticeConfig);

        }elseif($tag=='xsc'){
            $xscNoticeConfig=[
                'map'=>[
                    'tag'=>'学工部',
                    'category'=>'公告'
                ],
                'limit'=>'15',
                'getField'=>'id,tag,category,title,ctime'
            ];

            return $xscNotice=$this->getAll($article,$xscNoticeConfig);

        }
    }

    public function getAllLog(){
        $log=M('log');
        $logConfig=[
            'limit'=>'15',
            'getField'=>'id,message,ctime'
        ];
        return $youthNotice=$this->getAll($log,$logConfig);
    }
}
