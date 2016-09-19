<?php
namespace Admin\Controller;
use Think\Controller;
//后台商品控制器

class GoodsController extends Controller{
    
    //商品列表展示
    function showlist1(){
        //是用数据model模型
        //实例化model对象
       // $goods= new \Model\GoodsModel();
        $goods=D('Goods');
        $info=$goods->select();//获得数据信息        
        show_bug($info);
        foreach ($info as $k =>$v){
           echo $v['goods_name']."</br>";
        }
        //把数据assign到模板
        $this->assign('info',$info);
        
        $this->display();
    }
    //数据库查询
    function showlist(){
        $goods=D("Goods");
        $info = $goods->select();//获得数据信息        
        //show_bug($info);
        //foreach ($info as $k =>$v){
        //    echo $v['goods_name']."</br>";
        //}
        //把数据assign到模板,模板变量赋值
        $this->assign('info',$info);//第一个info在模板中使用
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