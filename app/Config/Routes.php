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
$routes->get('/index', 'alumnos::index');
$routes->get('/cerrarsesion', 'alumnos::cerrarsesion');
$routes->get('/consultarnotas', 'alumnos::consultarnotas');
$routes->get('/notificaciones', 'alumnos::notificaciones');
$routes->get('/configuracion', 'alumnos::configuracion');



$routes->get('/profesor', 'profesor::index2');
$routes->get('/index2', 'profesor::index2');
$routes->get('/cargarnotas', 'profesor::cargarnotas');
$routes->get('/configuracion2', 'profesor::configuracion2');
$routes->get('/crearcurso', 'profesor::crearcurso');
$routes->get('/notificaciones2', 'profesor::notificaciones2');
$routes->get('/cerrarsesion2', 'profesor::cerrarsesion2');
$routes->get('/sidemenu', 'profesor::sidemenu');

