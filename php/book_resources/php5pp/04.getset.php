<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.getset.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-17 16:22
 * @version 1.0
 **/
class StrictCoordinateClass {

    private $arr = array(
        'x' => NULL,
        'y' => NULL,
    );

    function __get($property) {
        if(array_key_exists($property, $this->arr)) {
            return $this->arr[$property];
        }
        else {
            print "Error: Can't read a property other than x & y\n";
        }
    }

    function _set($property, $value) {
        if(array_key_exists($property, $this->arr)) {
            $this->arr[$property] = $value;
        }
        else {
           print "Error: Can't write a property other than x & y \n";

        }
    }
}

$obj = new StrictCoordinateClass();
$obj->x = 1;
print $obj->x;
print "\n";

$obj->n = 2;
print $obj->n;
