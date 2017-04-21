<?php

namespace Home\Behavior;

use Think\Behavior;

class CheckLoginBehavior extends Behavior {

    public function run(&$params) {
        echo "检查用户登录状态", '<br>';
    }

}
