<?php
namespace Home\Controller;
use Think\Controller;
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
}