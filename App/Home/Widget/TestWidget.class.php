<?php

namespace Home\Widget;

use Think\Controller;

class TestWidget extends Controller {

    public function str() {
        echo "Hello Widget";
    }

    public function menu($id, $name) {
        echo $id . ':' . $name;
    }

    public function render() {
        $data = array(
            0 => '2223232',
            1 => '3535353',
            2 => 'fsfsfsf',
            3 => 'sfsfsfs',
            4 => 'gdfgdas'
        );
        $this->assign('data', $data);
        return $this->display('widget:test:render');
    }

}
