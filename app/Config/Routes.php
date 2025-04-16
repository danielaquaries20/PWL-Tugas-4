<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/home', 'Home::index');
// $routes->get('/produk', 'Home::produk');
// $routes->get('/keranjang', 'Home::keranjang');

// $routes->get('login', 'AuthController::login');
// $routes->post('login', 'AuthController::login');
// $routes->get('logout', 'AuthController::logout');
// $routes->get('/genpass', 'AuthController::genpass');


$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');
$routes->get('/genpass', 'AuthController::genpass');

$routes->get('produk', 'Home::produk', ['filter' => 'auth']);
$routes->get('keranjang', 'Home::keranjang', ['filter' => 'auth']);

// $routes->get('/home/about', 'Home::about');
// $routes->get('/home/services', 'Home::services');
// $routes->get('/home/contact', 'Home::contact');
// $routes->get('/home/description', 'Home::description');

