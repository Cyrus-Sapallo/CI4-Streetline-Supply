<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Main pages
$routes->get('/', 'Users::index');
$routes->get('moodboard', 'Users::moodboard');
$routes->get('roadmap', 'Users::roadmap');

// Login System
$routes->get('login', 'Users::login');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Login::logout');
$routes->post('logout', 'Auth::logout');
//signup system
$routes->post('signup', 'Auth::signup');
$routes->get('signup', 'Users::signup');


// Admin Routes
$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/services', 'Admin::services');
$routes->get('/admin/accounts', 'Admin::accounts');
$routes->get('/admin/requests', 'Admin::requests');
$routes->get('/admin/account', 'Admin::account');
