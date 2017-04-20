<?php

namespace Home\Controller;

use Home\Controller\Base\BaseController;
use Home\Model\ucenter\UcenterModel;
use Home\Model\borrow\BorrowModel;

class IndexController extends BaseController {

    public function index() {
        $this->show("我在玩", "utf-8");
    }

    public function act() {
        $ucenterModel = new UcenterModel();
        $borrowModel  = new BorrowModel();
        
        $ucenterRet   = $ucenterModel->test();
        $borrowRet    = $borrowModel->test();
         
        $config_test  = C('BLDUrl');
        echo $config_test;
        
        $common       = test();
        echo $common, '<br>';
        
        $common1      = common1();
        echo $common1, '<br>';
        
        $common2      = common2();
        echo $common2, '<br>';
        
        ///test compotent
//        $aaa = TestHelper::test();
//        echo $aaa;
        
        $this->assign("ucenterRet", $ucenterRet);
        $this->assign("borrowRet", $borrowRet);
        $this->assign("config_test", $config_test);
        
        return $this->display("act");
    }

}
