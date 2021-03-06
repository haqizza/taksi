<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/check', 'Home::check');

$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::auth');
$routes->get('/logout', 'Auth::logout');

$routes->get('/pengiriman', 'Pengiriman::index');
$routes->get('/cek', 'Pengiriman::cek');
$routes->get('/resi/(:segment)', 'Pengiriman::resi/$1');

$routes->get('/kurir', 'Kurir::index');
$routes->get('/kurir/take/(:segment)', 'Kurir::take/$1');

$routes->get('/admin', 'Admin::index');
// $routes->post('/save_kurir', 'Admin::save_kurir');
$routes->get('/admin/pengiriman/(:segment)', 'Admin::edit_pengiriman/$1');
$routes->get('/admin/kurir/(:segment)', 'Admin::edit_kurir/$1');
$routes->get('/admin/kurir/delete/(:segment)', 'Admin::delete_kurir/$1');
$routes->get('/admin/akun/(:segment)', 'Admin::edit_akun/$1');
$routes->get('/admin/akun/delete/(:segment)', 'Admin::delete_akun/$1');

$routes->match(['get', 'post'], 'image/(:segment)', 'Home::image/$1');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
