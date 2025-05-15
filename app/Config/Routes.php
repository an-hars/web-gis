<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Home', 'Home::index');
$routes->get('Home/viewMaps', 'Home::viewMaps');
$routes->get('Home/baseMaps', 'Home::baseMaps');
$routes->get('Home/marker', 'Home::marker');
$routes->get('Home/poligon', 'Home::poligon');

