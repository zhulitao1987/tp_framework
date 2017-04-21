<?php

use Think\Hook;

require_once 'common1.php';
require_once 'common2.php';

function test() {
    return 'test';
}

/**
 * 处理插件钩子
 * @param string $hook 钩子名称
 * @param mixed $params 传入参数
 * return void
 */
function hook($hook = '') {
    Hook::listen($hook);
}
