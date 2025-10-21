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
$routes->get('dashboard', 'Admin::dashboard');
$routes->get('services', 'Admin::services');
$routes->get('accounts', 'Admin::accounts');
$routes->get('requests', 'Admin::requests');
