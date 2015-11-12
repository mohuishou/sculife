<?php
/**
 * sculife前台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{


    public function article($id){
        $article=M('article');
        $data=$article->where('id='.$id)->select();
//        print_r($data);
        $this->assign('data',$data[0]);
        $this->display('index');
    }
}
