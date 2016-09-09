<?php
namespace Home\Controller;
use Think\Controller;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class UserController extends  Controller {
    //用户登录
    public function login(){
        //echo U("User/login");
        //调用视图display();
        $this->display();
    }
    //用户注册
    public function register(){
         $this->display();
    }
    //用户非法访问之空操作
    function _empty(){
        echo "<img src='".IMG_URL.'404.gif'."'/>";
    }
    //跨控制器调用
    function number(){
        echo "注册会员200万";
    }
}