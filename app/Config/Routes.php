<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->group('produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
    $routes->get('detail/(:num)', 'ProdukController::detail/$1');
});

$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
    $routes->get('checkout', 'TransaksiController::checkout');
});

$routes->group('profile', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'ProfileController::index');
    $routes->post('', 'ProfileController::update');
    $routes->post('edit/(:any)', 'ProfileController::profile_edit/$1');
    $routes->post('change-password', 'ProfileController::changePassword');
});

$routes->group('transaksi', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::history');
});

$routes->get('bantuan', 'Home::bantuan', ['filter' => 'auth']);
$routes->get('search', 'Home::search', ['filter' => 'auth']);