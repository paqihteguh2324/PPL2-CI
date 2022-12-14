<?php

namespace Config;
use App\Models\M_mahasiswa;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Mahasiswa', 'C_Mahasiswa::display');
$routes->get('/Mahasiswa/detail/(:num)', 'C_Mahasiswa::detail/$1');
$routes->get('/Mahasiswa/delete/(:num)', 'C_Mahasiswa::delete/$1');
$routes->get('/Mahasiswa/update/(:num)', 'C_Mahasiswa::updateDisplay/$1');
$routes->post('/Mahasiswa/search', 'C_Mahasiswa::search');
$routes->get('/dashboard', 'C_Mahasiswa::dashboard');
$routes->get('/home', 'C_home::display');
$routes->get('/login', 'C_login::Display');
$routes->post('/login/auth', 'C_login::auth');
$routes->get('/logout', 'C_login::logout');



$routes->post('/Mahasiswa/update/(:num)', 'C_Mahasiswa::update/$1');
$routes->post('/Mahasiswa/input', 'C_Mahasiswa::input');
$routes->post('/Mahasiswa/inputDisplay', 'C_Mahasiswa::inputDisplay');
$routes->get('/Mahasiswa/update', 'C_Mahasiswa::update');
$routes->get('/Mahasiswa/grafik', 'C_Mahasiswa::grafik');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
