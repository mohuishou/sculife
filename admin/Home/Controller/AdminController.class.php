<?php
/**
 * sculife后台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;
class AdminController extends AdminBaseController {

    public function index(){

        $article=M('article');
        $count['youth']=$article->where('tag="青春川大"')->max('number');
        $count['xsc']=$article->where('tag="学工部"')->max('number');
        $handle=new HandleController();
        $someArticle=$handle->getArticle('',5);
        $someLog=$handle->getLog('',5);
        $this->assign('someLog',$someLog);
        $this->assign('someArticle',$someArticle);
        $this->assign('count',$count);
        $this->display();
    }

    public function notice($tag){
        $handle=new HandleController();
        $data=$handle->getAllNotice($tag);
        $this->assign('des','公告');
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->display('index');

    }

    public function systemConfig(){
        $handle=new HandleController();
        $config=$handle->getConfig();
        $category=$handle->getCategory();
        $this->assign('category',$category);
        $this->assign('config',$config);
        $this->display('system');
    }

    public function addConfig(){
        $handle=new HandleController();
        $category=$handle->getCategory();
        $this->ajaxReturn($category);
        // $User = M("User"); // 实例化User对象
        // // 根据表单提交的POST数据创建数据对象
        // if($User->create()){
        //     $result = $User->add(); // 写入数据到数据库 
        //     if($result){
        //         // 如果主键是自动增长型 成功后返回值就是最新插入的值
        //         $insertId = $result;
        //     }
        // }
    }

    public function spider($tag='',$category=''){
        $spider=new ArticleController();
        $spider->spiderArticle($category,$tag);
    }

    public function news($tag){
        $handle=new HandleController();
        $data=$handle->getAllNews($tag);
        $this->assign('des','新闻');
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->display('index');
    }

    public function log(){
        $handle=new HandleController();
        $data=$handle->getAllLog();
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->display('index');
    }



}