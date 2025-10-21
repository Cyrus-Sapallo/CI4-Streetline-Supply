<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('login', 'Users::login');
$routes->get('signup', 'Users::signup');
$routes->get('moodboard', 'Users::moodboard');
$routes->get('roadmap', 'Users::roadmap');
//admin Routes
$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/services', 'Admin::services');
$routes->get('/admin/accounts', 'Admin::accounts');
$routes->get('/admin/requests', 'Admin::requests');
