<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main Pages
$routes->get('/', 'Users::index');
$routes->get('moodboard', 'Users::moodboard');
$routes->get('roadmap', 'Users::roadmap');

// FRONTEND (show pages)
$routes->get('login', 'Users::login');   // shows login page
$routes->get('signup', 'Users::signup'); // shows signup page

// BACKEND (form processing)
$routes->post('login', 'Auth::login');     // calls login() in Auth.php
$routes->post('signup', 'Auth::signup');   // calls signup() in Auth.php
$routes->get('logout', 'Auth::logout');    // calls logout() in Auth.php

// Admin Pages

$routes->get('admin', 'Admin::dashboard');
$routes->get('admin/dashboard', 'Admin::dashboard'); // ✅ add this line
$routes->get('admin/services', 'Admin::services');
$routes->get('admin/accounts', 'Admin::accounts');
$routes->get('admin/requests', 'Admin::requests');
$routes->get('admin/account', 'Admin::account');

//Shop Pages
$routes->get('shop', 'Shop::index');
$routes->get('product/(:num)', 'ProductController::view/$1');
