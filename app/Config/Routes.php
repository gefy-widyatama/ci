<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/faqs', 'Faqs::index');
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');