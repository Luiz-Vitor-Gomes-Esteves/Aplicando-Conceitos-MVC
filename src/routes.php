<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

// Para exebir o formulário
$router->get('/novo','UsuariosController@add');

// Rota para receber os usuários do formulario em add.php
$router->post('/novo','UsuariosController@addAction'); 

//Rota de edição
$router->get('/usuario/{id}/editar','HomeController@edit');

//Rota de exclusão
$router->get('/usuario/{id}/excluir','HomeController@del');