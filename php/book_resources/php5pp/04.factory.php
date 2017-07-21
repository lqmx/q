<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.factory.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-18 10:14
 * @version 1.0
 **/

abstract class User {
    function __construct($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function hasReadPermission() {
        return true;
    }

    function hasModifyPermission() {
        return false;
    }

    function hasDeletePermission() {
        return false;
    }

    function wantsFlashInterface() {
        return true;
    }

    protected $name = NULL;
}

class GuestUser extends User {
}

class CustomerUer extends User {
    function hasModifyPermission() {
        return true;
    }

}


class AdminUser extends User {
    function hasModifyPermission() {
        return true;
    }

    function hasDeletePermission() {
        return true;
    }


    function wantsFlashInterface() {
        return false;
    }

}

class UserFactory {
    private static $users = array(
        "andi" => "admin",
        "stig" => "guest",
        "Derick" => "customer",
    );

    static function Create($name) {
        if(!isset(self::$users[$name])) {
        }
        switch(self::$users[$name]) {
        case "guest":
            return new GuestUser($name);
        case "customer": return new CustomerUser($name);
        case "admin": return new AdminUser($name);
        default:
        }
    }
}

function boolToStr($b) {
    if($b == true) {
        return "Yes\n";
    }
    else {
        return "No\n";
    }
}

function displayPermission(User $obj) {
    print $obj->getName() . "'s permissino:\n";
    print "Read: " . boolToStr($obj->hasReadPermission());
    print "Modify: " .boolToStr($obj->hasModifyPermission());
    print "Delete: " . boolToStr($obj->hasDeletePermission());
}

function displayRequirements(User $obj) {
    if($obj->wantsFlashInterface()) {
        print $obj->getName() . " requires Flash\n";
    }
}

$logins = array("andi", "stig", "Derick");

foreach($logins as $login) {
    displayPermissions(UserFactory::Create($login));
    displayRequirements(UserFactory::Create($login));
}

