<?php

/**
 * 用于允许在运行时为某个特定的类创建一个可访问的实例
 * Class Product
 */

final class Product {

    private static $instance;
    public $mix;

    public static function getInstance() {
        if(!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){}

    private function __clone() {}
}

$firstProduct = Product::getInstance();
$secondProduct = Product::getInstance();

$firstProduct->mix = 'test';
$secondProduct->mix = 'example';

print_r($firstProduct->mix); // example
print_r($secondProduct->mix); // example