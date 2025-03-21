<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'news/create', 'News::create');
$routes->get('news', 'News::index');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('(:any)', 'Pages::view/$1');
