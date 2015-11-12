<?php
/**
 * sculife后台管理模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class HandleBaseController extends Controller {

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

    public function getArticle($map,$limit){
        $article=M('article');
        return $article->where($map)->limit($limit)->order('id DESC')->getField('id,title,category,tag,ctime');
    }

    public function getLog($map,$limit){
        $log=M('log');
        return $log->where($map)->order('id DESC')->limit($limit)->select();
    }





}