<?php
return array(
    //厦门便利店相关
    'BLDUrl' => 'http://oauth.zhinengshouyin.com',
    'BLDApi' => array(
        'token'     => '/oauth/token',
        'userInfo'  => '/api/user/userInfo',
        'authorize' => '/oauth/authorize'
    ),
    'CLIENT_ID'     => 533,
    'CLIENT_SECRET' => 'Nq4OwE6vY070W1fNN51r9RulleVac3qrSa7HoS0u',
    'GRANT_TYPE'    => 'authorization_code',
    //元立方用户中心
    'ucenterUrl' => 'http://api.test.ylfcf.com/user',
    'ucenterApi' => array(
        'selectOne' => '/user/selectOne',
        'reg'       => '/user/reg',
    ),
    ///元立方活动中心
    'activeUrl' => 'http://api.test.ylfcf.com/active',
    'activeApi' => array(
        'add'   => '/experience/add'
    )
);

