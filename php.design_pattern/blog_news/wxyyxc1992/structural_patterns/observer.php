<?php
/**
 * 某个对象可以被设置为是可观察的，只要通过某种方式允许其他对象注册为观察者。
 * 每当被观察的对象改变时，会发送信息给观察者
 */

interface Observer {
    function onChanged($sender, $args);
}

interface Observable {
    function addObserver($observer);
}

class CustomerList implements Observable {

    private $_observers = array();

    public function addCustomer($name) {
        foreach($this->_observers as $obs) {
            $obs->onChanged($this, $name);
        }
    }

    public function addObserver($observer)
    {
        $this->_observers[] = $observer;
    }
}

class CustomerListLogger implements Observer {
    public function onChanged($sender, $args)
    {
        echo ("$args: Customer has been add to the list\n");
    }
}

$ul = new CustomerList();
$ul->addObserver(new CustomerListLogger());
$ul->addCustomer('jack');
