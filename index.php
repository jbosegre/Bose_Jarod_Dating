<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/19/2018
 * Time: 12:49 PM
 */

ini_set ("display_errors", 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function()
{
    $view =  new View;
    echo $view->render
    ('pages/home.html');
}
);

//Run fat free
$f3->run();