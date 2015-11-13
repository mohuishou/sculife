<?php
/**
 * sculife后台管理模块基础模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;
class AdminBaseController extends Controller {

    public function _initialize(){
        if($this->is_login()){
            
        }else{
            $this->login();
        }
    }

    public function login(){
        if(I('send')){
            if(I('username')=='sculife'&&I('password')=='sculife123'){
                $_SESSION['id']=1;
                $this->ajaxReturn(['status'=>'1','message'=>'登陆成功']);
            }else{
                $this->ajaxReturn(['status'=>'0',"message"=>"对不起，帐号或者密码错误"]);
                $this->display('login');
            }
        }else{
            
            $this->display('login');
            exit();
        }
    }

    public function logout(){
        if($_SESSION['id']){
            unset($_SESSION['id']);
            $this->login();
        } 
    }

    /**
     * 验证是否登陆
     * @return bool
     */
    public function is_login(){
        if($_SESSION['id']){
            return true;
        }else{
            return false;
        }
    }
}