<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.arrayaccess2.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-17 16:36
 * @version 1.0
 **/

class UserData {


    public $users;

    public function __construct() {
        $this->users = array(
            array('id' => 1, 'name' => 'lmx',),
            array('id' => 2, 'name' => 'qmx',),
            array('id' => 3, 'name' => 'bmx',),
        );
    }

    public function getUserById($id) {
        foreach($this->users as $user) {
            if($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    public function updateUserById($id, $name) {
        foreach($this->users as $k => $user) {
            if($user['id'] == $id) {
                $this->users[$k]['name'] = $name;
                return;
            }
        }
        $this->addUser($id, $name);
    }

    public function addUser($id, $name) {
        $this->users[] = array(
            'id' => $id,
            'name' => $name,
        );
    }

    public function delUser($id) {
        foreach($this->users as $k => $user) {
            if($user['id'] == $id) {
                unset($this->users[$id]);
            }
        }
    }
}



class User implements ArrayAccess {

    public $user;

    public function __construct() {
        $this->user = new UserData();
    }

    public function offsetExists($id) {
        return $this->user->getUserById($id);
    }

    public function offsetGet($id) {
        return $this->user->getUserById($id);
    }


    public function offsetSet($id, $name) {
        $this->user->updateUserById($id, $name);
    }

    public function offsetUnset($id) {
        $this->user->delUser($id);
    }
}

$userMap = new User();
$userMap[4] = 'smx';

var_dump($userMap);
