<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/profile/(:any)/(:any)/(:any)', 'UserController::profile');

#form
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');