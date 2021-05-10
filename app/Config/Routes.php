<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin', 'Admin::index');
$routes->get('/data_admin', 'Admin::view');
$routes->get('/add_admin', 'Admin::add');
$routes->get('/data_users', 'User::view');
$routes->get('/add_users', 'User::add');
$routes->get('/data_karir', 'Karir::view');
$routes->get('/add_karir', 'Karir::add');
$routes->get('/data_mentor', 'Mentor::view');
$routes->get('/add_mentor', 'Mentor::add');
$routes->get('/data_blog', 'Blog::view');
$routes->get('/add_blog', 'Blog::add');
$routes->get('/data_siswa', 'Siswa::view');
$routes->get('/add_siswa', 'Siswa::add');


//Users
$routes->get('/', 'UserView::index');
$routes->get('/Blog', 'Blog::blog');
$routes->get('/Pembelajaran', 'Pembelajaran::pembelajaran');
$routes->get('/IsiPembelajaran', 'IsiPembelajaran::isiPembelajaran');
$routes->get('/IsiPembelajaran2', 'IsiPembelajaran2::isiPembelajaran2');
$routes->get('/Pricelist', 'Pricelist::pricelist');
$routes->get('/PricelistSubscription', 'PricelistSubscription::pricelistSubscription');
$routes->get('/InfoLomba', 'InfoLomba::infoLomba');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
