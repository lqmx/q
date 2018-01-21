<?php
/**
 * php bootstrap.php
 * User: lmx
 * Time: 2018/1/21 下午4:00
 */

use Illuminate\Database\Capsule\Manager as Capsule;

define('BASE_PATH', __DIR__);

// Autoload 自动载入
require BASE_PATH . '/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule();
$capsule->addConnection(require BASE_PATH . '/config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PlainTextHandler());
$whoops->register();

