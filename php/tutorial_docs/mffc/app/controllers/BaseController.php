<?php
/**
 * php BaseController.php
 * User: lmx
 * Time: 2018/1/21 下午3:16
 */

class BaseController {

    protected $view;

    public function __construct() {

    }

    public function __destruct() {
        $view = $this->view;
        if($view instanceof  View) {
            extract($view->data);
            require $view->view;
        }
    }
}