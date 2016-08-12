<?php
header("content-type:text/html;charset=utf-8");
//tp模式变为开发模式
define('APP_DEBUG', true);

// 定义css、img、js常亮
define("SITE_URL", "HTTP://WWW.SHOP.COM/");
define("CSS_URL", SITE_URL."shop/public/css/");
define("IMG_URL", SITE_URL."shop/public/img/");
define("JS_URL", SITE_URL."shop/public/js/");
//引入核心文件
include "../ThinkPHP/ThinkPHP.php";