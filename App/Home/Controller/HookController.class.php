<?php

namespace Home\Controller;

use Home\Controller\Base\BaseController;

class HookController extends BaseController {

    public function index() {
        echo 'hello,我是tp';
        echo '修复BUG';
        exit;
    }

}
