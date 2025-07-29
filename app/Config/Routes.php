<?php

use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');

$routes->get("/", "Beranda\\Main::index");

$routes->get("tentang-sekolah", "Konten\\Konten::about");

$routes->get("visi misi/", "Konten\\Konten::visi_misi");

$routes->get("sejarah/", "Konten\\Konten::sejarah");


$routes->get("jurusan/tkro", "Konten\\Konten::tkro");
$routes->get("jurusan/tjkt", "Konten\\Konten::tjkt");
$routes->get("jurusan/pemesinan", "Konten\\Konten::pemesinan");
$routes->get("jurusan/elektronika", "Konten\\Konten::elektronika");
$routes->get("jurusan/broadcast", "Konten\\Konten::broadcast");