<?php 
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \dxdcore\App();

throw new Exception('Страница не найдена', 404);