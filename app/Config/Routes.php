<?php

use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');

$routes->get("/", "Beranda\\Main::index");
