<?php 
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \dxdcore\App();

debug(\dxdcore\App::$app->getProperties());