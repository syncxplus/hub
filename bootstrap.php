<?php

define('ROOT', __DIR__);
define('RUNTIME', ROOT . '/runtime');

require_once ROOT . '/vendor/autoload.php';

$f3 = Base::instance();

$f3->mset([
    'AUTOLOAD' => ROOT . '/src/',
    'LOGS' => RUNTIME . '/logs/',
    'TEMP' => RUNTIME . '/temp/',
    'CACHE' => false,
    'DEBUG' => 3,
]);

$f3->config([
    RUNTIME . '/config.ini',
]);

$f3->set('LOGGER', new Log(date('Y-m-d.\l\o\g')));
