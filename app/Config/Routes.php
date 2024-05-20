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
$routes->post('/register', 'register::guardar');



$routes->get('/alumnos', 'alumnos::index');
$routes->get('/', 'alumnos::inicio');
$routes->get('/cerrarsesion', 'alumnos::cerrarsesion');
$routes->get('/consultarnotas', 'alumnos::consultarnotas');
$routes->get('/sidebar', 'alumnos::sidebar');
$routes->get('/prueba2', 'alumnos::prueba2');


$routes->get('/profesor', 'profesor::index');
$routes->get('/sidemenu', 'profesor::sidemenu');