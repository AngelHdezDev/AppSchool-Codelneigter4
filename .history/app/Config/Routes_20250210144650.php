<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/tareas', 'TareasController::index');
$routes->get('/tarea', 'TareasController::tarea');
$routes->post('/tarea/store', 'TareasController::store');
$routes->post('/tarea/delete/(:num)', 'TareasController::delete/$1');
$routes->get('/tarea/editar/(:num)', 'TareasController::editar/$1');
$routes->post('update', 'TareasController::update');
