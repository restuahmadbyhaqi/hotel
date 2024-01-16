<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Auth::login');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/proses_login', 'Auth::proses_login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/proses_register', 'Auth::proses_register');
$routes->get('user/dashboard', 'user::dashboard');


$routes->get('user/pelanggan', 'user::pelanggan');
$routes->get('user/pelanggan/create', 'user::pelanggan_create');
$routes->post('user/pelanggan/create_action', 'user::pelanggan_create_action');
$routes->get('user/pelanggan/edit/(:num)', 'user::pelanggan_edit/$1');
$routes->post('user/pelanggan/edit_action', 'user::pelanggan_edit_action');
$routes->get('user/delete/(:num)', 'user::delete/$1');


// POSTMAN
$routes->get('/', 'Home::index');
$routes->get('pelanggan', 'PelangganController::index');
$routes->get('pelanggan/(:num)', 'PelangganController::show/$1');
$routes->post('pelanggan', 'PelangganController::create');
$routes->put('pelanggan/(:num)', 'PelangganController::update/$1');
$routes->delete('pelanggan/(:num)', 'PelangganController::delete/$1');