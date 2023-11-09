<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* rutas de clases como funcionaba php */
$routes->get('/', 'Home::index');
$routes->get('/1', 'Home::saludo');
$routes->get('/form', 'Home::form');

/* rutas para la prueba */
$routes->get('/inicio', 'Prueba::Formulario');
$routes->get('/resultadoPrueba', 'Prueba::Resultado');
$routes->get('/envioDatosPrueba', 'Prueba::envioDatosPrueba');