<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.call.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-17 16:27
 * @version 1.0
 **/

class HelloWorld {
    function display($count) {
        for($i = 0; $i < $count; $i ++) {
            print "Hello, World\n";
        }
        return $count;
    }

}

class HelloWorldDelegator {
    function __construct() {
        $this->obj = new HelloWorld();
    }

    function __call($method, $args) {
        return call_user_func_array(array($this->obj, $method), $args);
    }
    private $obj;
}

$obj = new HelloWorldDelegator();
print $obj->display(3);
