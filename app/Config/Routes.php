<?php

use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');

$routes->get("/", "Beranda\\Main::index");

$routes->get("tentang_kami/", "Konten\\Konten::about");

$routes->get("visi_misi/", "Konten\\Konten::visi_misi");
