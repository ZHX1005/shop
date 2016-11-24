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
    function showlist2(){
        $goods=D("Goods");
        $info = $goods->select();//获得数据信息        
        //show_bug($info);
        //foreach ($info as $k =>$v){
        //    echo $v['goods_name']."</br>";
        //}
        //把数据assign到模板,模板变量赋值
       //$info=$goods->where("shop_price>1000 and goods_name like '苹%'")->select();
        //查询指定字段
        //$info=$goods->field("goods_id,goods_name")->select();
        //限制条数
        //$info=$goods->limit(5)->select();
        //分组查询group by
        $info=$goods->field('goods_category_id')->group('goods_category_id')->select();
        show_bug($info);
        $this->assign('info',$info);//第一个info在模板中使用
        $this->display();
    }
    function showlist(){
        $goods=D("Goods");
        //$info=$goods->select("40,41,42");//select返回的是二维数组
        //$info=$goods->find(40);
        $info=$goods->having('shop_price>1000')->select();
        //show_bug($info);
        $this->assign('info',$info);
        $this->display();
    }
    //添加商品
    function add1(){
        $goods=D("Goods");
        $arr=array(
            'goods_name'=>'ipnone7',
            'weight'=>100,
        );
        $goods->add($arr);
        $this->display();
    }
    function add(){
        //两个逻辑①展现表单②接受表单数据
        $goods=D("Goods");
        if (!empty($_POST)){
            //print_r($_POST);
            $arr=$_POST;
            $z=$goods->add($arr);
            if ($z){
                echo "sucess";
            }else{
                echo "failure";
            }
        }else{
            $this->display();
        }
    }
    //商品修改
    function update(){
       //var_dump(get_defined_constants(true));
        $this->display();
    }
}