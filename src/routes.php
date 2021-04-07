<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@index');
$router->get('/login/esqueci', 'LoginController@esqueci');
$router->get('/login/registro', 'LoginController@registro');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');