<?php

return [

    'produtos' => [
        'controller' => 'ProdutoController',
        'action' => 'index'
    ],

    'produtos/inserir' => [
        'controller' => 'ProdutoController',
        'action' => 'store'
    ],

    'produtos/deletar' => [ 
        'controller' => 'ProdutoController',
        'action' => 'delete'
    ],

    'produtos/alterar' => [
        'controller' => 'ProdutoController',
        'action' => 'update'
    ],

    'main' => [
        'controller' => 'MainController',
        'action' => 'index'
    ],

    'login' => [
        'controller' => 'UsuarioController',
        'action' => 'showLogin'
    ],

    'autenticar' => [
        'controller' => 'UsuarioController',
        'action' => 'authenticate'
    ],

];

?>