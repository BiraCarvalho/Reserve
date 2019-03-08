<?php

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri        = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$dispatcher = require __DIR__ . '/config/routes.php';
$routeInfo  = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {

    case FastRoute\Dispatcher::NOT_FOUND:

        header('HTTP/1.0 404 Not Found');
        die('404 Not Found');
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:

        header('HTTP/1.0 405 Method Not Allowed');
        die('405 Method Not Allowed');
        break;

    case FastRoute\Dispatcher::FOUND:

        $handler = $routeInfo[1];
        $vars    = $routeInfo[2];

        $method = @$vars['method'] ?: 'index';
        unset($vars['method']);

        call_user_func_array($handler . '::' . $method, $vars);

        break;

}