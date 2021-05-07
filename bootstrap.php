<?php
include __DIR__.'/vendor/autoload.php';

use Vht\View\ViewEngine as ViewEngine;
use Illuminate\Container\Container;

$container = new \Illuminate\Container\Container;
$view = new ViewEngine(__DIR__.DIRECTORY_SEPARATOR."views",__DIR__.DIRECTORY_SEPARATOR."views/@cache");

$container->singleton(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=mobile;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");
        return $db;
    }
);

$container->singleton('view',$view);


