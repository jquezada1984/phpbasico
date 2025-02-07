<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Home::index');
$routes->get('/menu', 'Menu::index');
$routes->get('/categoria', 'Categoria::index');
$routes->get('/home/prueba', 'Home::prueba');
$routes->get('/menus', 'Menus::index');

$routes->post('/Home/auth', 'Home::auth');
$routes->get('index.php/logout', 'Home::logout');
$routes->get('/home/dashboard', 'Home::dashboard');
