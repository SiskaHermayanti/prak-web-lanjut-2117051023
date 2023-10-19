<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('user/profile', 'UserController::profile');
$routes->get('user/profile/(:any)/(:any)/', 'UserController::profile/$1/$2/');

#form
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');

$routes->get('/user', 'UserController::index');

$routes->post('/user/profile', 'UserController::profile');
$routes->get('/user', [UserController::class, 'index']);

// upload delete
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);

// delete data
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

// routes show letaknya harus yang paling bawah
$routes->get('/user/(:any)', [UserController::class, 'show']);
