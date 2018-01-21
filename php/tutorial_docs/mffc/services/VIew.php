<?php
/**
 * php VIew.php
 * User: lmx
 * Time: 2018/1/21 下午4:13
 */

class View {

    const VIEW_BASE_PATH = '/app/views/';

    public $view;
    public $data;

    public function __construct($view) {
        $this->view = $view;
    }

    public static function make($viewName = null) {
        if(!$viewName) {
            throw new InvalidArgumentException("viewName is null");
        }
        $viewFilePath = self::getFilePath($viewName);
        if(!is_file($viewFilePath)) {
            throw new UnexpectedValueException("view file don't exist");
        }
        return new View($viewFilePath);
    }

    public function with($key, $value = null) {
        $this->data[$key] = $value;
        return $this;
    }

    private static function getFilePath($viewName) {
        $filePath = str_replace('.', '/', $viewName);
        return BASE_PATH . self::VIEW_BASE_PATH . $filePath . '.php';
    }

    public function __call($name, $arguments) {
        if(starts_with($name, 'with')) {
            return $this->with(snake_case(substr($name, 4)), $arguments[0]);
        }
        throw new BadMethodCallException("method [$name] don't exist");
    }
}