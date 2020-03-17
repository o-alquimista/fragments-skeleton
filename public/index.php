<?php

/**
 * The entry point of the application.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Fragments\Component\Routing\Router;

$router = new Router;
$router->start();
