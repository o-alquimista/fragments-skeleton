<?php

/**
 * The entry point of the application.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Fragments\Component\ExceptionHandler;
use Fragments\Component\Routing\Router;
use Fragments\Bundle\Exception\HttpException;
use Fragments\Bundle\Exception\ServerErrorHttpException;
use Fragments\Component\TemplateHelper;

$exceptionHandler = new ExceptionHandler;
$exceptionHandler->setHandler();

try {
    try {
        $router = new Router;
        $router->start();
    } catch (\ErrorException $errorException) {
        throw new ServerErrorHttpException('Something went wrong.', $errorException);
    }
} catch (HttpException $error) {
    $statusCode = $error->getStatusCode();
    $message = $error->getMessage();
    $previousException = $error->getPrevious();

    http_response_code($statusCode);

    // FIXME: log more information, such as filename and line
    if ($previousException) {
        error_log($previousException->getMessage());
    } else {
        error_log($message);
    }

    $templateHelper = new TemplateHelper;
    $templateHelper->render(__DIR__ . '/../templates/error/error_page.php', [
        'statusCode' => $statusCode,
        'message' => $message
    ]);

    exit;
}