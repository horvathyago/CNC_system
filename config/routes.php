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

        //Rotas de Estoque
        $builder->connect('/estoquepecas', ['controller' => 'EstoquePecas', 'action' => 'index']);
        $builder->connect('/estoquemateriaprima', ['controller' => 'EstoqueMateriaPrima', 'action' => 'index']);

        //Rotas de Materia Prima
        $builder->connect('/materiaprima', ['controller' => 'MateriaPrima', 'action' => 'index']);
        $builder->connect('/materiaprima/add', ['controller' => 'MateriaPrima', 'action' => 'add']);
        

        // Fallbacks para outros controllers
        $builder->fallbacks();
    });
};
