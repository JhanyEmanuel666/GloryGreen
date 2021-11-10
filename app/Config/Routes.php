<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin_Dashboard::index', ['filter' => 'auth']);
$routes->get('/admin_dashboard', 'Admin_Dashboard::index', ['filter' => 'auth']);
$routes->get('/admin_team', 'Admin_Team::index', ['filter' => 'auth']);
$routes->get('/admin_profile', 'Admin_Profile::index', ['filter' => 'auth']);
$routes->get('/admin_player', 'Admin_Player::index', ['filter' => 'auth']);
$routes->get('/admin_berita', 'Admin_Berita::index', ['filter' => 'auth']);
$routes->get('/admin_jadwal', 'Admin_Jadwal::index', ['filter' => 'auth']);
$routes->get('/admin_season', 'Admin_Season::index', ['filter' => 'auth']);
$routes->get('/admin_about', 'Admin_About::index', ['filter' => 'auth']);

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
