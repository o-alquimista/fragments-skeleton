<?php

/**
 * The entry point of the application.
 */

require '../vendor/autoload.php';

use Fragments\Component\Routing\Router;

$router = new Router;
$router->start();
