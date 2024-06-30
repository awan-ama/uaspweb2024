<?php

use CodeIgniter\Router\RouteCollection;
use PHPUnit\Util\Filter;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', function() {
    return redirect()->to('/login');
});

$routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
   $routes->get('/', 'Login::login');
   $routes->post('/', 'Login::save');
});

$routes->group('register', function ($routes) {
    $routes->get('/', 'Register::register');
    $routes->post('/', 'Register::save');
});

$routes->group('user', ['filter' => 'authenticate'], function ($routes) {
     $routes->get('dashboard', 'User::dashboard');
     $routes->get('e_services','User::eServices');
     $routes->get('e_command_center','User::eCommandCenter');
     $routes->get('e_commerce','User::eCommerce');
     $routes->get('e_response', 'User::eResponse');
     $routes->get('e_response/tanyaFT', 'User::tanyaFT');
     $routes->get('e_response/tanyaFT/new', 'User::pengajuanTanyaFT');
     $routes->get('e_response/tanyaFT/detail', 'User::detailTanyaFT');
     $routes->get('e_response/tanyaFT/tanggapan', 'User::tanggapanTanyaFT');
     $routes->get('e_commerce','User::eCommerce');
});

$routes->group('logout', function ($routes) {
    $routes->get('/', 'Logout::logout');
});