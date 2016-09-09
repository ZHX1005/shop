<?php
namespace Admin\Controller;
use Think\Controller;
//后台商品控制器

class GoodsController extends Controller{
    
    //商品列表展示
    function showlist(){
        $this->display();
    }
    //添加商品
    function add(){
        $this->display();
    }
    //商品修改
    function update(){
       //var_dump(get_defined_constants(true));
        $this->display();
    }
}