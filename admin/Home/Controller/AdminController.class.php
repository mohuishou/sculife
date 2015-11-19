<?php
/**
 * sculife后台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;
class AdminController extends AdminBaseController {
    public  $handle;
    public function _initialize(){
        parent::_initialize();
        $this->handle=new HandleController();
        $this->assign('side', $this->handle->allTag);
    }
    public function index(){
         
        $someArticle= $this->handle->getArticle('',5);
        $someLog= $this->handle->getLog('',5);
        $this->assign('someLog',$someLog);
        $this->assign('someArticle',$someArticle);
        $this->display();

    }

    public function Article($tid){
        $data= $this->handle->getAllArticle($tid);
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->display('index');
    }

    public function systemConfig(){
         
        $config= $this->handle->getConfig();
        $this->assign('tag',$this->handle->allTag);
        $this->assign('config',$config);
        $this->display('system');
    }

    public function addConfig(){
        $cate=M('category');
        $category=$cate->getField('id,category');
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

    public function spider(){
        $spider=new ArticleController();
        $spider->spiderArticle();
    }


    public function log(){
         
        $data= $this->handle->getAllLog();
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->display('index');
    }



}