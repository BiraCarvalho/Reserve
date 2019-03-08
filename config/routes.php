<?php

return FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $group) {

    $group->addGroup('', function (FastRoute\RouteCollector $route) {
        $controller = 'Application\Dashboard\Controller';
        $route->addRoute('GET', '/',                   $controller);
        $route->addRoute('GET', '/dashboard',          $controller);
        $route->addRoute(['GET','POST'], '/dashboard/{method}', $controller);
    });

    $group->addGroup('/espetaculo', function (FastRoute\RouteCollector $route) {
        $controller = 'Application\Espetaculo\Controller';
        $route->addRoute('GET', '/',                             $controller);
        $route->addRoute(['GET','POST'], '/{method}',            $controller);
        $route->addRoute(['GET','POST'], '[/{method}/{id:\d+}]', $controller);
    });

    $group->addGroup('/poltrona', function (FastRoute\RouteCollector $route) {
        $controller = 'Application\Poltrona\Controller';
        $route->addRoute('GET', '/',                                    $controller);
        $route->addRoute(['GET','POST'], '/{method}',                   $controller);
        $route->addRoute(['GET','POST'], '[/{method}/{id:\d+}]',        $controller);
        $route->addRoute(['GET','POST'], '/{method}/{id:\d+}/{codigo}', $controller);
    });

});