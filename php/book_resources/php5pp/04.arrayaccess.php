<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.arrayaccess.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-17 16:32
 * @version 1.0
 **/

interface ArrayAccess {
    bool offsetExists($index);
    mixed offsetGet($index);
    void offsetSet($index, $new_value);
    vaoid offsetUnset($index);
}

class UserToSocialSecurity implements ArrayAccess {

    private $db;

    function offsetExists($name) {
        return $this->db->userExists($name);
    }

    function offsetGet($name) {
        return $this->db->getUserId($name);
    }

    function offsetSet($name, $id) {
        $this->db->setUserId($name, $id);
    }

    function offsetUnset($name) {
        $this->db->removeUser($name);
    }
}


$userMap = new UserToSocialSecurity();
print "John's ID number is " .$userMap["John"];
