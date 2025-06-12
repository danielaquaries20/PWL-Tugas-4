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

// $routes->get('produk', 'Home::produk', ['filter' => 'auth']);
// $routes->post('produk', 'ProdukController::create', ['filter' => 'auth']);
// $routes->post('produk/edit/(:any)', 'ProdukController::edit/$1', ['filter' => 'auth']);
// $routes->get('produk/delete/(:any)', 'ProdukController::delete/$1', ['filter' => 'auth']);

$routes->group('produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
});

// $routes->get('keranjang', 'Home::keranjang', ['filter' => 'auth']);

$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
});

$routes->get('checkout', 'TransaksiController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'TransaksiController::buy', ['filter' => 'auth']);

$routes->get('get-location', 'TransaksiController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'TransaksiController::getCost', ['filter' => 'auth']);

// $routes->get('/home/about', 'Home::about');
// $routes->get('/home/services', 'Home::services');
// $routes->get('/home/contact', 'Home::contact');
// $routes->get('/home/description', 'Home::description');

