<?php
require_once "Vendor/Mustache/Autoloader.php";
/**
 * Created by PhpStorm
 * User: Loïc
 * Date: 05/11/2016
 * Time: 12:17
 */
Mustache_Autoloader::register();



$options =  array('extension' => '.html');

$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views', $options),
));
echo $m->render('index',array('planet' => 'World!')); // "Hello World!"