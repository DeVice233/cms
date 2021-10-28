<?php
use \NoahBuscher\Macaw\Macaw;

error_reporting(E_ALL);
ini_set('display_errors', 'on');
require('vendor/autoload.php');


$loader = new \Twig\Loader\FilesystemLoader('template/front');
$twig = new \Twig\Environment($loader, [
]);



Macaw::get('/', 'App\Controller@index');
Macaw::get('page', 'App\Controller@page');
Macaw::get('view/(:num)', 'App\Controller@view');

Macaw::dispatch();
