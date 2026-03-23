<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main Pages
$routes->get('/', 'Users::index');
$routes->get('moodboard', 'Users::moodboard');
$routes->get('roadmap', 'Users::roadmap');

//profile
$routes->get('profile', 'Users::profile');
$routes->post('update-profile', 'Users::updateProfile');
$routes->post('upload-profile', 'Users::uploadProfile');
$routes->post('upload-profile', 'Users::uploadProfileImage');

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
//admin product crud
$routes->post('admin/save', 'Admin::saveProduct');
$routes->get('admin/editProduct/(:num)', 'Admin::editProduct/$1');
$routes->post('admin/updateProduct/(:num)', 'Admin::updateProduct/$1');
$routes->post('admin/deleteProduct/(:num)', 'Admin::deleteProduct/$1');

//Shop Pages
$routes->get('shop', 'Shop::index');
$routes->get('product/(:num)', 'ProductController::view/$1');

//wishlist-mark
$routes->get('wishlist', 'Wishlist::index');
$routes->get('wishlist/add/(:num)', 'Wishlist::add/$1');
$routes->get('wishlist/remove/(:num)', 'Wishlist::remove/$1');
