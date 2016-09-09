<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
    function index(){
        //echo "hello";
       $this->display();
    }
    //展现后台头部页面
    function head(){
       $this->display(); 
    }
    function left(){
        $this->display();
    }
    function right(){
        $this->display();
    }
}