<?php
/**
 * php index.php
 * User: lmx
 * Time: 2018/1/21 下午3:00
 */

define('PUBLIC_PATH', __DIR__);


// 启动器
require PUBLIC_PATH . '/../bootstrap.php';


// 路由配置
require BASE_PATH . '/config/routes.php';