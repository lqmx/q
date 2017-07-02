<?php
/**
 * 对于某个变量的延迟初始化也是常常被用到的，对于一个类而言往往并不知道它的哪个功能会被用到，
 * 而部分功能往往是仅仅被需要使用一次
 */

interface Product {
    public function getName();
}

class Factory {
    protected $firstProduct;
    protected $secondProduct;
    public function getFirstProduct() {
        if(!$this->firstProduct){
            $this->firstProduct = new FirstProduct();
        }
        return $this->firstProduct;
    }
    public function getSecondProduct() {
        if(!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }
        return $this->secondProduct;
    }
}

class FirstProduct implements Product {
    public function getName() {
        return 'The first product';
    }
}

class SecondProduct implements Product {
    public function getName() {
        return 'Second product';
    }
}

$factory = new Factory();
print_r($factory->getFirstProduct()->getName());
print_r($factory->getSecondProduct()->getName());
print_r($factory->getFirstProduct()->getName());