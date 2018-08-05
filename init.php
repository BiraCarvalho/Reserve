<?php

ini_set("display_errors", true);

require __DIR__ . '/vendor/autoload.php';

use Application\Dashboard;
use Application\Evento;
use Application\Ingresso;


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $group) {    
    $group->addGroup('/dashboard', function (FastRoute\RouteCollector $route) {
        $controller = 'Application\Dashboard\Controller';
        $route->addRoute('GET', '/',                    $controller);
        $route->addRoute('GET', '/{method}',            $controller);
        $route->addRoute('GET', '[/{method}/{id:\d+}]', $controller);
    });
});


//--------------------

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {

    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:        
        echo '405 Method Not Allowed';
        break;

    case FastRoute\Dispatcher::FOUND:
        
        $handler = $routeInfo[1];
        $vars    = $routeInfo[2];
                
        $method = @$vars['method'] ?: 'index';
        unset($vars['method']);
        
        call_user_func_array($handler . '::' . $method,$vars);

        break;

}