<?php

/**
 * 添加自定义的behavior标签
 */
return array(
    'app_init' => array(
        'test' => 'Home\Behavior\TestBehavior',
        'CheckLogin' => 'Home\Behavior\CheckLoginBehavior'
    ),
    'my_tags' => array('Home\Behavior\TagsBehavior')
);
