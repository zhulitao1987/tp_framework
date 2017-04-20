<?php

namespace Home\Widget;

use Think\Controller;

class CateWidget extends Controller {

    /**
     * @fucntion test multiply widgets
     */
    public function index() {
        $list = array(
            0 => 'widget1',
            1 => 'widget2',
            2 => 'widget3',
            3 => 'widget4',
            4 => 'widget5',
            5 => 'widget6'
        );
        $this->assign("list", $list);
        return $this->display("widget:cate:index");
    }

}
