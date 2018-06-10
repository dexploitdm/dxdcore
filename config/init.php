<?php 

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("www", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/dxdcore/core');
define("LIBS", ROOT . '/vendor/dxdcore/core/libs');
define("CACHE", ROOT . '/tpm/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');

$app_path = "http://{$_SERVER['HTTP_HOST']}{S_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';


