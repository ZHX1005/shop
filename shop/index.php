<?php
header("content-type:text/html;charset=utf-8");
//tp模式变为开发模式
define('APP_DEBUG', true);
//引入核心文件
include "../ThinkPHP/ThinkPHP.php";