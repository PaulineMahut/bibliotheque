<?php

namespace App;

session_start();

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");

$router->get('/oh', 'App\Controllers\LivreController@showLivres');
$router->post('/oh', 'App\Controllers\LivreController@showLivres');

$router->get("/add", "App\Controller\LivreController@addLivre");
$router->post("/add", "App\Controller\LivreController@addLivre");

$router->get("/modify/:id", "App\Controller\LivreController@modifyLivre");
$router->post("/modify/:id", "App\Controller\LivreController@modifyLivre");

// $router->get("/note", "App\Controller\NoteController@addNote");
// $router->post("/note", "App\Controller\NoteController@addNote");

$router->get("/note:id", "App\Controller\UserController@addNote");

$router->post("/note/:id", "App\Controller\NoteController@addNote");

$router->get("/addUser", "App\Controller\UserController@addUser");
$router->post("/addUser", "App\Controller\UserController@addUser");


$router->run();