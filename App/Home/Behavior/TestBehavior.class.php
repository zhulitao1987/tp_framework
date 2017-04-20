<?php

namespace Home\Behavior;

class TestBehavior {

    public function run(&$params) {
        echo "REQUEST BEHAVIOR" . $params;
    }

}
