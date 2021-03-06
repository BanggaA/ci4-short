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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//route main
$routes->get('/', 'Short::index');
$routes->post('/', 'Short::shortedLink');
$routes->get('/c', 'Short::searchCounter');
$routes->post('/c', 'Short::urlClickCounter');
$routes->get('/c/(:alphanum)', 'Short::urlClickCounter/$1');
$routes->get('/s/(:alphanum)', 'Short::send/$1');


//user route
$routes->get('/login', 'User::login');
$routes->get('/logout', 'User::logout');
$routes->post('/login', 'User::auth');
$routes->get('/register', 'User::register');
$routes->post('/register', 'User::add');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->post('/dashboard/setter', 'Short::setter', ['filter' => 'auth']);
$routes->post('/dashboard/delete', 'Short::delete', ['filter' => 'auth']);


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
