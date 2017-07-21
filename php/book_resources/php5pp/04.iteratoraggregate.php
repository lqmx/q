<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.iteratoraggregate.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-17 17:03
 * @version 1.0
 **/

class NumberSquared implements IteratorAggregate {

    public function __construct($start, $end) {
        $this->start = $start;
        $this->end = $end;
    }

    public function getIterator() {
        return new NumberSquaredIterator($this);
    }

    public function getStart() {
        return $this->start;
    }

    public function getEnd() {
        return $this->end;
    }

    private $start, $end;
}


class NumberSquaredIterator implements Iterator {

    function __construct($obj) {
        $this->obj = $obj;
    }

    public function rewind() {
        $this->cur = $this->obj->getStart();
    }

    public function key() {
        return $this->cur;
    }

    public function current() {
        return pow($this->cur, 2);
    }

    public function next() {
        $this->cur ++;
    }

    public function valid() {
        return $this->cur <= $this->obj->getEnd();
    }

    private $cur;
    private $obj;
}

$obj = new NumberSquared(3, 7);
foreach($obj as $key => $val) {
    print "The square of $key is $val\n";
}
