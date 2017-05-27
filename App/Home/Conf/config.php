<?php

$array = array(
    //'配置项'=>'配置值'
    'HTML_CACHE_ON'     => true,
    'URL_ROUTER_ON'     => true,//开启路由规则
    'MODULE_ALLOW_LIST' => array('Home'),
    'URL_MODEL'         => 2,
    'VAR_URL_PARAMS'    => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR' => '/', //PATHINFO URL分割符
    'URL_HTML_SUFFIX'   => '.html',
    'URL_ROUTE_RULES'   => array(
        '/^ymm\/(.*)$/' => "/home/index/friendReg?extension_code=:1",//注册送短链
        'bld.html' => '/bld/index'
    ),
    'LOG_RECORD' => true, // 开启日志记录
    'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
    
);
///本地API
$api_array = require(__DIR__ . '/local_config.php');
$server_name = $_SERVER['SERVER_NAME'];


///test配置环境
if (in_array($server_name, array('wap.test.ylfcf.com', 'http://wap.test.ylfcf.com'))) {
    $api_array = 1;
}
///dev验证环境配置
if (in_array($server_name, array('dev.wap.ylfcf.com', 'http://dev.wap.ylfcf.com'))) {
    $api_array = require(__DIR__ . '/test_config.php');
}
///如果是线上环境,使用线上配置
if (in_array($server_name, array('wap.ylfcf.com', 'http://wap.ylfcf.com'))) {
    $api_array = require(__DIR__ . '/online_config.php');
}
$config_array = array_merge($array, $api_array);
return $config_array;


