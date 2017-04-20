<?php

$array = array(
    //'配置项'=>'配置值'

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
    'RSA' => array(
        'modulus'          => '158374205120166798458765206034329279303803236705967453087109948002820967477276205076647167122992991410838124148906573708146119877672157179327013279480279095263297499364257079730877300418848158933073858486132152744700840419847863470714867718255196768553633448776844979341271933768758118555939558266385662088059',
        'private'          => '29225897381987232564205050609261612583734323278788628982643509943178918483759989383050350781779410685912938850677878182192031582168348702668430025818003495329541554805056800222832483867535978586122948613206343000478102458712327181551403752795207204971613236355840847045746065679934025952579569001257567984065',
        'keyLength'        => "1024",
        'js_public_key'    => '00e188485ff3028e65312a8609527374cbc13c30ee10143fc7e6fe8a1e1d2ef1fa00a91108390ec1637f8f40412abcbb1bea8d6c946a91aba3a887fa92404cfb94676b899246b62bec17621b580c5cda9c4d2af1ba7fee4978699997bd3cab0a46966a6102df96d0984a3aa0862588f6f5494fec5ea4b15d13841df7c3ae1a137b',
        'js_public_length' => '10001'
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


