<?php
header("content-type:text/html;charset=utf-8");
//tp模式变为开发模式
define('APP_DEBUG', true);

// 定义css、img、js常亮
//define("SITE_URL", "HTTP://WWW.SHOP.COM/");
define("SITE_URL", "http://www.shop11.com/");

define("CSS_URL", SITE_URL."shop/public/Home/css/");
define("IMG_URL", SITE_URL."shop/public/Home/images/");
define("JS_URL", SITE_URL."shop/public/Home/js/");

define("ADMIN_CSS_URL", SITE_URL."shop/public/Admin/css/");
define("ADMIN_IMG_URL", SITE_URL."shop/public/Admin/images/");
define("ADMIN_JS_URL", SITE_URL."shop/public/Admin/js/");
//引入核心文件
include "../ThinkPHP/ThinkPHP.php";
//echo CSS_URL;
//echo IMG_URL;