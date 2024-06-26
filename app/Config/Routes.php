<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Home::login_view');
$routes->get('login', 'Home::login_view');
$routes->get('register', 'Home::register_view');


