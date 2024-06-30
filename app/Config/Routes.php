<?php

use CodeIgniter\Router\RouteCollection;
use PHPUnit\Util\Filter;

/**
 * @var RouteCollection $routes
 */
$routes->get('detail','Home::detail');

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
     $routes->post('e_response/tanyaFT/new/save', 'User::save');
     $routes->get('e_response/tanyaFT/(:segment)/detail', 'User::detailTanyaFT/$1');
     $routes->get('e_response/tanyaFT/(:segment)/tanggapan', 'User::tanggapanTanyaFT/$1');
     $routes->get('e_commerce','User::eCommerce');
     $routes->get('download-file/(:segment)', 'User::downloadFile/$1');
});

$routes->group('logout', function ($routes) {
    $routes->get('/', 'Logout::logout');
});