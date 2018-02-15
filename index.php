<?php
/**
 * Created by PhpStorm.
 * User: Jarod Bose
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

$f3->route('POST ./Personal_Information',
    function()
    {
        global $template;
        echo $template->render('pages/Profile.php');
    }
);

$f3->route('POST ./Profile',
    function()
    {
        global $template;
        echo $template->render('pages/Interest.php');
    }
);

$f3->route('POST ./Interest',
    function()
    {
        global $template;
        echo $template->render('pages/Profile_Summary.php');
    }
);

//Run fat free
$f3->run();