<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');


$router->get('/notes', 'notes/index.php')->only('auth');// Middleware

$router->get('/note', 'notes/show.php');
$router->get('/notes/create', 'notes/create.php');
$router->get('/note/edit', 'notes/edit.php');


$router->delete('/note', 'notes/destroy.php');
$router->post('/notes/create', 'notes/store.php');
$router->patch('/note', 'notes/update.php');


$router->get('/register', 'registration/create.php')->only('guest');// Middleware

$router->post('/register', 'registration/store.php')->only('guest');



$router->get('/login', 'session/create.php')->only('guest');

$router->post('/session', 'session/store.php')->only('guest');

$router->delete('/session', 'session/destroy.php')->only('auth');