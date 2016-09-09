<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller{
    //商品列表
    public function showlist(){
        //获得user控制器的number方法返回的信息
        //当前usercontroller会通过自动加载机制引入
        //thinkPHP/library/think/think.class.php 下的function autoload();
       
         //$user= new UserController();
         //通过快捷函数实例化控制器
         //new一个控制器对象给我们返回
         //[资源://][模块/]控制器
        $user=A("User");
        echo $user->number();
        $this->display();
    }
    //商品详细信息
    public function detail(){
        $this->display();
    }
}