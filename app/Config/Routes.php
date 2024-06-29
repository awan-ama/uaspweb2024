<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('login', function ($routes) {
   $routes->get('/', 'Login::login');
   $routes->post('', 'Login::save');
});

$routes->group('register', function ($routes) {
    $routes->get('/', 'Register::register');
    $routes->post('save', 'Register::save');
});

$routes->group('user', ['filter' => 'authenticate'], function ($routes) {
     $routes->get('dashboard', 'User::dashboard');
     $routes->get('e-services','User::eServices');
     $routes->get('e-command-center','User::eCommandCenter');
     $routes->get('e-commerce','User::eCommerce');
     $routes->get('e-response', 'User::eResponse');

     $routes->get('e-response/tanyaFT', 'User::tanyaFT');
     $routes->get('e-response/tanyaFT/new', 'User::pengajuanTanyaFT');
     $routes->add('e-response/tanyaFT/new', 'User::addPengajuanTanyaFT');
     $routes->get('e-response/tanyaFT/detail', 'User::detailTanyaFT');
     $routes->get('e-response/tanyaFT/tanggapan', 'User::tanggapanTanyaFT');
     $routes->get('e-commerce','User::eCommerce');
});

$routes->group('logout', function ($routes) {
    $routes->get('/', 'Logout::logout');
});