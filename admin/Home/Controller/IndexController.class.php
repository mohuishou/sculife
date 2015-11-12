<?php
/**
 * sculife前台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{

    public function index(){
        $handle=new HandleController();
        $youth=$handle->getArticle(['tag'=>'青春川大'],5);
        $xsc=$handle->getArticle(['tag'=>'学工部'],5);
        $this->assign('youth',$youth);
        $this->assign('xsc',$xsc);
        $this->display();
    }

    public function article($id){
        $article=M('article');
        $data=$article->where('id='.$id)->select();
//        print_r($data);
        $this->assign('data',$data[0]);
        $this->display('index');
    }

    public function notice($tag){
        if($tag=="youth"){
            $tags="青春川大";
        }elseif($tag=='xsc'){
            $tags="学工部";
        }else{
            $this->error('对不起，参数错误');
        }
        $handle=new HandleController();
        $list=$handle->getAllNotice($tag);
        $this->assign('tag',$tags);
        $this->assign('list',$list);
        $this->display('index');
    }

    public function news($tag){
        if($tag=="youth"){
            $tags="青春川大";
        }elseif($tag=='xsc'){
            $tags="学工部";
        }else{
            $this->error('对不起，参数错误');
        }
        $handle=new HandleController();
        $list=$handle->getAllNews($tag);
        $this->assign('tag',$tags);
        $this->assign('list',$list);
        $this->display('index');
    }
}
