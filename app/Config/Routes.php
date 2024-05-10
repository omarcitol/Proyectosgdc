<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/minicio', 'iniciocontrolador::index');
$routes->get('/Informacion', 'iniciocontrolador::Informacion');
$routes->get('/contacto', 'iniciocontrolador::contacto');
$routes->get('/login', 'login::index');
$routes->get('/register', 'register::index');