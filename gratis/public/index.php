<?php

//ALL URL REQUESTS TAKE YOU TO THIS FILE VIA HTACCESS
session_start();

//DEFINE CONSTANTS FOR THE SERVER AND DATABASE
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'gratis');
define('SERVER', 'localhost');

//DEFINE CONSTANTS FOR FILE PATHS
define('ROOT', dirname(__DIR__) . '/');
define('APP', ROOT . 'app/');
define('VIEWS', APP . 'views/');
define('MODELS', APP . 'models/');
define('DATA', APP . 'data/');
define('LIBS', APP . 'libs/');
define('CONTROLLER', APP . 'controller/');
$modules = [ROOT, APP, LIBS, CONTROLLER, DATA];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', false);

new Application;
