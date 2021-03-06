<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL'=> 3,
    'SHOW_PAGE_TRACE'       =>  true,    //让页面显示日志追踪信息
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tpshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    // 模板引擎
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 
    
);