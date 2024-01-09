<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');

$routes->get('/bayar', 'Home::bayar');

$routes->group('pembayaran', ['namespace' => 'App\Controllers'], function ($routes) {
  // Rute untuk menampilkan halaman pembayaran
  $routes->get('bayar', 'PembayaranController::bayar');

  // Rute untuk memproses formulir pembayaran
  $routes->post('bayar', 'PembayaranController::bayar');
});

$routes->post('bayar', 'PembayaranController::bayar');

$routes->post('midtrans-callback', 'PembayaranController::midtransCallback');
