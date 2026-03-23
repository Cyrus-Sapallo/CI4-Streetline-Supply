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

// Shop and Cart Routes
$routes->get('shop', 'Shop::index');
$routes->get('cart', 'Cart::index');
$routes->post('cart/add', 'Cart::add');
$routes->post('cart/update', 'Cart::update');
$routes->post('cart/remove', 'Cart::remove');
