<?php 

return [
    
    'login' => [
        'controller' => 'UsuarioController',
        'action' => 'showLogin'
    ],
    'autenticar' => [
        'controller' => 'UsuarioController',
        'action' => 'authenticate'
    ],
 
    'main' => [ 
        'controller' => 'MainController',
        'action' => 'index' 
    ],

    'alunos' => [
        'controller' => 'AlunoController',
        'action' => 'index'
    ],
    'alunos/inserir' => [
        'controller' => 'AlunoController',
        'action' => 'store'
    ],
    'alunos/deletar' => [
        'controller' => 'AlunoController',
        'action' => 'delete'
    ],
    'alunos/alterar' => [
        'controller' => 'AlunoController',
        'action' => 'update'
    ],

    'cursos' => [
        'controller' => 'CursoController',
        'action' => 'index'
    ],
    'cursos/inserir' => [
        'controller' => 'CursoController',
        'action' => 'store'
    ],
    'cursos/deletar' => [
        'controller' => 'CursoController',
        'action' => 'delete'
    ],
    'cursos/alterar' => [
        'controller' => 'CursoController',
        'action' => 'update'
    ],
    
    'disciplinas' => [
        'controller' => 'DisciplinaController',
        'action' => 'index'
    ],
    'disciplinas/inserir' => [ 
        'controller' => 'DisciplinaController',
        'action' => 'store'
    ],
    'disciplinas/deletar' => [
        'controller' => 'DisciplinaController',
        'action' => 'delete'
    ],
    'disciplinas/alterar' => [
        'controller' => 'DisciplinaController',
        'action' => 'update'
    ]
    
];
?>