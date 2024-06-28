<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('', 'Home::index');
// $routes->get('register', 'Home::register');
// $routes->get('dashboard', 'Home::dashboard');

$routes->group('login', function ($routes) {
   $routes->get('/', 'Login::login');
   $routes->post('/', 'Login::save');
});
// //will be replaced when the UI and database is complete
// // $routes->group('login', ['filter' => 'redirectAuth'], function ($routes) {
// //     $routes->get('/', 'Login::index');
// //     $routes->post('/', 'Login::auth');
// // });

$routes->group('register', function ($routes) {
    $routes->get('/', 'Register::register');
    // $routes->post('/', 'Register::save');
});
$routes->group('user', function ($routes) {
     $routes->get('dashboard', 'User::dashboard');
     $routes->get('eResponse', 'User::eResponsse');
     $routes->get('e_response/tanyaFT', 'User::tanyaFT');
     $routes->add('e_response/tanyaFT/new', 'User::tanyaFT');
     $routes->get('e_response/tanyaFT/detail', 'User::tanyaFT');
     $routes->get('e_response/tanyaFT/tanggapan', 'User::tanyaFT');
});

$routes->get('eservices','Home::eservices');
// $routes->group('logout', function ($routes) {
//     $routes->get('/', 'Logout::index');
// });