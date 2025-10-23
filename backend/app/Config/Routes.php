<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main pages
$routes->get('/', 'Users::index');
$routes->get('moodboard', 'Users::moodboard');
$routes->get('roadmap', 'Users::roadmap');

// Signup system
// The login page and signup page should be rendered by the Auth controller
$routes->get('login', 'Auth::login');   // GET login page
$routes->get('signup', 'Auth::signup'); // GET signup page
$routes->get('logout', 'Auth::logout'); // GET logout (this redirects the user)

// Handling form submissions
$routes->post('login', 'Auth::login');  // POST login (handles form submission)
$routes->post('signup', 'Auth::signup'); // POST signup (handles form submission)
$routes->post('logout', 'Auth::logout'); // POST logout (handles form submission)

// Admin Routes
$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/services', 'Admin::services');
$routes->get('/admin/accounts', 'Admin::accounts');
$routes->get('/admin/requests', 'Admin::requests');
$routes->get('/admin/account', 'Admin::account');
