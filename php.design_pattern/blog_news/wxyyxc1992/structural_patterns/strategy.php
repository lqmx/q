<?php
/**
 * 为了让客户类能够更好地使用某些算法而不需要知道其具体的实现
 */

interface OutputInterface {
    public function load($data);
}

class SerializedArrayOutput implements OutputInterface {
    public function load($data) {
        return serialize($data);
    }
}

class JsonStringOutput implements OutputInterface {
    public function load($data)
    {
        return json_encode($data);
    }
}

class ArrayOutput implements OutputInterface {
    public function load($data) {
        return $data;
    }
}