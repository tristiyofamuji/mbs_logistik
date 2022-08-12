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

//Keuangan
$routes->get('/keuangan', 'Keuangan::index');
$routes->add('/keuangan/tambah', 'Keuangan::tambah');
$routes->add('/keuangan/save', 'Keuangan::save');
$routes->add('/keuangan/save/(:any)', 'Keuangan::save/$1');
$routes->add('/keuangan/edit/(:any)', 'Keuangan::edit/$1');
$routes->add('/keuangan/delete/(:segment)', 'Keuangan::delete/$1');
$routes->add('/keuangan/datagrid/(:segment)', 'Keuangan::datagrid/$1');

$routes->get('/order', 'Order::index');
$routes->get('/profile', 'Profile::index');
$routes->post('/profile/editData', 'Profile::editData');
$routes->get('/bagihasilsopir', 'Bagihasil::index');
$routes->post('/keuangan/store', 'Keuangan::store');
$routes->get('/lacakposisi', 'Lacakposisi::index');
$routes->get('/mainetenance', 'Maintenancetruck::index');
$routes->get('/jualbelitruck', 'Jualbelitruck::index');
$routes->get('/pajakdansim', 'Pajakdansim::index');
$routes->get('/company', 'Company::index');
$routes->get('/helper', 'Helper::index');

//Sopir
$routes->get('/sopir', 'Sopir::index');
$routes->add('/sopir/datagrid/(:segment)', 'Sopir::datagrid/$1');
$routes->add('/sopir/tambah', 'Sopir::tambah');
$routes->add('/sopir/save', 'Sopir::save');
$routes->add('/sopir/save/(:any)', 'Sopir::save/$1');
$routes->add('/sopir/edit/(:any)', 'Sopir::edit/$1');
$routes->add('/sopir/delete/(:segment)', 'Sopir::delete/$1');
$routes->add('/sopir/datagrid/(:segment)', 'Sopir::datagrid/$1');

//Company
$routes->get('/company', 'Company::index');
$routes->add('/company/datagrid/(:segment)', 'Company::datagrid/$1');
$routes->add('/company/tambah', 'Company::tambah');
$routes->add('/company/save', 'Company::save');
$routes->add('/company/save/(:any)', 'Company::save/$1');
$routes->add('/company/edit/(:any)', 'Company::edit/$1');
$routes->add('/company/delete/(:segment)', 'Company::delete/$1');

//Gaji Sopir
$routes->get('/gajisopir', 'Gajisopir::index');
$routes->add('/gajisopir/datagrid/(:segment)', 'Gajisopir::datagrid/$1');
$routes->add('/gajisopir/tambah', 'Gajisopir::tambah');
$routes->add('/gajisopir/save', 'Gajisopir::save');
$routes->add('/gajisopir/save/(:any)', 'Gajisopir::save/$1');
$routes->add('/gajisopir/save_detail', 'Gajisopir::save_detail');
$routes->add('/gajisopir/save_detail/(:any)', 'Gajisopir::save_detail/$1');
$routes->add('/gajisopir/edit/(:any)', 'Gajisopir::edit/$1');
$routes->add('/gajisopir/tambah_slip/(:any)', 'Gajisopir::tambah_slip/$1');
$routes->add('/gajisopir/delete/(:segment)', 'Gajisopir::delete/$1');
$routes->add('/gajisopir/detail_slip/(:segment)', 'Gajisopir::detail_slip/$1');

//Pajak dan SIM
$routes->get('/pajakdansim', 'Pajakdansim::index');
$routes->add('/pajakdansim/datagrid/(:segment)', 'Pajakdansim::datagrid/$1');
$routes->add('/pajakdansim/tambah', 'Pajakdansim::tambah');
$routes->add('/pajakdansim/save', 'Pajakdansim::save');
$routes->add('/pajakdansim/save/(:any)', 'Pajakdansim::save/$1');
$routes->add('/pajakdansim/edit/(:any)', 'Pajakdansim::edit/$1');
$routes->add('/pajakdansim/delete/(:segment)', 'Pajakdansim::delete/$1');

//Maintenance Truck
$routes->get('/maintenance', 'Maintenancetruck::index');
$routes->add('/maintenance/datagrid/(:segment)', 'Maintenancetruck::datagrid/$1');
$routes->add('/maintenance/tambah', 'Maintenancetruck::tambah');
$routes->add('/maintenance/save', 'Maintenancetruck::save');
$routes->add('/maintenance/save/(:any)', 'Maintenancetruck::save/$1');
$routes->add('/maintenance/edit/(:any)', 'Maintenancetruck::edit/$1');
$routes->add('/maintenance/delete/(:segment)', 'Maintenancetruck::delete/$1');

//Jual Beli Truck
$routes->get('/jualbelitruck', 'Jualbelitruck::index');
$routes->add('/jualbelitruck/datagrid/(:segment)', 'Jualbelitruck::datagrid/$1');
$routes->add('/jualbelitruck/tambah', 'Jualbelitruck::tambah');
$routes->add('/jualbelitruck/save', 'Jualbelitruck::save');
$routes->add('/jualbelitruck/save/(:any)', 'Jualbelitruck::save/$1');
$routes->add('/jualbelitruck/edit/(:any)', 'Jualbelitruck::edit/$1');
$routes->add('/jualbelitruck/delete/(:segment)', 'Jualbelitruck::delete/$1');

//Order
$routes->get('/order', 'Order::index');
$routes->add('/order/datagrid/(:segment)', 'Order::datagrid/$1');
$routes->add('/order/tambah', 'Order::tambah');
$routes->add('/order/save', 'Order::save');
$routes->add('/order/save/(:any)', 'Order::save/$1');
$routes->add('/order/edit/(:any)', 'Order::edit/$1');
$routes->add('/order/delete/(:segment)', 'Order::delete/$1');

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
