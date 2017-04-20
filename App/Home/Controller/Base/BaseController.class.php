<?php

namespace Home\Controller\Base;

use Think\Controller;
use Think\Hook;

class BaseController extends Controller {

    public function _initialize() {
        Hook::add('check_login_status', 'Home\Behavior\CheckLoginBehavior');
        Hook::listen('check_login_status');
    }

}
