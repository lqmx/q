<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.singlon.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-18 10:12
 * @version 1.0
 **/

class Logger {

    static function getInstance() {
        if(self::$instance == NULL) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    private function __construct() {
    }

    private function __clone() {
    }

    function Log($str){
    }

    static private $instance = NULL;
}

Logger::getInstance()->Log("Checkpoint");
