<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\ucenter\UcenterModel;
use Home\Model\borrow\BorrowModel;

class IndexController extends Controller {

    public function index() {
        return $this->show("我在玩", "utf-8");
    }
    
    /**
     * @return page files
     */
    public function act() {
        $ucenterModel = new UcenterModel();
        $borrowModel  = new BorrowModel();
        
        $ucenterRet   = $ucenterModel->test();
        $borrowRet    = $borrowModel->test();
         
        $config_test  = C('BLDUrl');
        echo $config_test, '<br>';

        $common       = test();
        echo $common, '<br>';
        
        $common1      = common1();
        echo $common1, '<br>';
        
        $common2      = common2();
        echo $common2, '<br>';
        
        $this->assign("ucenterRet", $ucenterRet);
        $this->assign("borrowRet", $borrowRet);
        $this->assign("config_test", $config_test);
        
        return $this->display("act");
    }

}
