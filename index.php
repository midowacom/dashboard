<?php
include 'vendor/autoload.php';
include '../config.php';
define('R',__DIR__);
define('DS',DIRECTORY_SEPARATOR);
define('LIBRARIES',$directory.'/'.$folders[0].'/libraries/');
include LIBRARIES.'config.php';
error_reporting(3);
$dirs = $folders;
use Vht\View\ViewEngine as ViewEngine;
use Illuminate\Container\Container;
$container = new \Illuminate\Container\Container;
$view = new ViewEngine(__DIR__.DS."views",__DIR__.DS."views/@cache");
$container->singleton(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=mobile;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");
        return $db;
    }
);
echo $view->make('index', ['directories' => $dirs]);

	?>
