<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    echo 'success';
});

Macaw::get('/home', 'HomeController@home');

//Macaw::get('(:all)', function($fu) {
//    echo 'no router '. $fu;
//});

Macaw::$error_callback = function() {
    throw new Exception("404 Not Found");
};

Macaw::dispatch();