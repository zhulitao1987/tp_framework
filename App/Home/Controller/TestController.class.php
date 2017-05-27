<?php

namespace Home\Controller;

use Think\Controller;

class TestController extends Controller {

    public function getNum($num) {
        return $num * 2;
    }

}
