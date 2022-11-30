<?php

namespace Config;

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

//INDEX
$routes->get('/', 'Home::index');
//LOGICA DE LOGIN Y LOGOUT
$routes->post('login', 'Usuarios::login');
$routes->get('logout', 'Usuarios::logout');
//LOGICA DE ALMOHADAS
$routes->get('listar', 'Almohadas::index');
$routes->get('crear', 'Almohadas::crear');
$routes->post('guardar', 'Almohadas::guardar');
$routes->get('borrar/(:num)', 'Almohadas::borrar/$1');
$routes->get('editar/(:num)', 'Almohadas::editar/$1');
$routes->post('actualizar(:num)', 'Almohadas::actualizar/$1');
$routes->get('nosotros', 'Almohadas::nosotros');
//LOGICA DE USUARIOS
$routes->get('/usuarios/listar', 'Usuarios::index');
$routes->get('/usuarios/crear', 'Usuarios::crear');
$routes->post('/usuarios/guardar', 'Usuarios::guardar');
$routes->get('/usuarios/borrar/(:num)', 'Usuarios::borrar/$1');
$routes->get('/usuarios/editar/(:num)', 'Usuarios::editar/$1');
$routes->post('/usuarios/actualizar(:num)', 'Usuarios::actualizar/$1');
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

