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
   $routes->post('/', 'Login::auth');
});
// //will be replaced when the UI and database is complete
// // $routes->group('login', ['filter' => 'redirectAuth'], function ($routes) {
// //     $routes->get('/', 'Login::index');
// //     $routes->post('/', 'Login::auth');
// // });

$routes->group('register', function ($routes) {
    $routes->get('/', 'Register::register');
    $routes->post('/', 'Register::save');
});

$routes->group('user', function ($routes) {
     $routes->get('dashboard', 'User::dashboard');
     $routes->get('e_services','User::eServices');
     $routes->get('e_command_center','User::eCommandCenter');
     $routes->get('e_response', 'User::eResponse');
     $routes->get('e_response/tanyaFT', 'User::tanyaFT');
     $routes->get('e_response/tanyaFT/new', 'User::pengajuanTanyaFT');
     $routes->get('e_response/tanyaFT/detail', 'User::detailTanyaFT');
     $routes->get('e_response/tanyaFT/tanggapan', 'User::tanggapanTanyaFT');
});

 $routes->get('eservices','Home::eservices');
 $routes->get('ecommandcenter','Home::ecommandcenter');
 $routes->get('eresponse','Home::eresponse');
 $routes->get('tanyaft1','Home::tanyaft1');
 $routes->get('pengajuantanya','Home::pengajuantanya');
 $routes->get('dashboard','Home::dashboard');
$routes->get('respontanya','Home::respontanya');

$routes->group('logout', function ($routes) {
    $routes->get('/', 'Logout::logout');
});