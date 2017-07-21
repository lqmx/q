<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.observer.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-18 11:01
 * @version 1.0
 **/

class ExchangeRate {

    static private $instance = NULL;
    private $observers = array();
    private $exchange_rate;

    private function ExchangeRate() {

    }

    static public function getInstance() {
        if(self::$instance == NULL) {
            self::$instance = new ExchangeRate();
        }
        return self::$instance;
    }

    public function getExchangeRate() {
        return $this->exchange_rate;
    }

    public function setExchangeRate($new_rate) {
        $this->exchange_rate = $new_rate;
        $this->notifyObservers();
    }

    public function registerObserver($obj) {
        $this->observers[] = $obj;
    }

    function notifyObservers() {
        foreach($this->observers as $obj) {
            $obj->notify($this);
        }
    }
}

class ProductItem implements Observer {

    public function __construct() {
        ExchangeRate::getInstance()->registerObserver($this);
    }

    public function notify($obj) {
        if($obj instanceof ExchangeRate)
            print "Recived update!\n";
    }
}

$product1 = new ProductItem();
$product2 = new ProductItem();

ExchangeRate::getInstance()->setExchangeRate(4.5);
