<?php
/**
 * sculife前台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
    public $handle;
    public function _initialize(){
        $this->handle=new HandleController();
        $category=$this->handle->allTag;
        $this->assign('category',$category);
    }
    public function index(){
        $news=$this->handle->getArticle('tid=7 OR tid=4',5);
        $notice=$this->handle->getArticle('tid=5 OR tid=6',5);
        $this->assign('news',$news);
        $this->assign('notice',$notice);
        $this->display('index');
    }

    public function article($id){
        $article=M('article');
        $data=$article->where('id='.$id)->select();
//        print_r($data);
        $this->assign('data',$data[0]);
        $this->display('index');
    }
    public function articleList($tid){
        $list=$this->handle->getAllArticle($tid);
        $tag=$this->handle->getTag('id='.$tid);
        $this->assign('tag',$tag);
        $this->assign('list',$list);
        $this->display('index');
    }



}
