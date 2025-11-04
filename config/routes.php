<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        // Página inicial
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        // Pages
        $builder->connect('/pages/*', 'Pages::display');

        // Rotas do LoginController
        $builder->connect('/login/login', ['controller' => 'Login', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Login', 'action' => 'logout']);

        // Fallbacks para outros controllers
        $builder->fallbacks();
    });
};
