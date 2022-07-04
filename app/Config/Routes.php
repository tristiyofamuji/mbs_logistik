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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', function () {
    if(session('LT@logged_in') != TRUE){
	    // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        return redirect()->to('/login');
    }else{
        return redirect()->to('/home');
    }
});
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');
$routes->get('/register', 'Register::index');
$routes->post('/register/auth', 'Register::auth');
$routes->get('/home', 'Home::index');
$routes->get('/keuangan', 'Keuangan::index');
$routes->get('/order', 'Order::index');
$routes->get('/profile', 'Profile::index');
$routes->post('/profile/editData', 'Profile::editData');
$routes->get('/bagihasilsopir', 'Bagihasil::index');
$routes->get('/gajisopir', 'Gajisopir::index');
$routes->get('/lacakposisi', 'Lacakposisi::index');
$routes->get('/mainetenance', 'Maintenancetruck::index');
$routes->get('/jualbelitruck', 'Jualbelitruck::index');
$routes->get('/pajakdansim', 'Pajakdansim::index');
$routes->get('/setting', 'Setting::index');
$routes->get('/helper', 'Helper::index');

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
