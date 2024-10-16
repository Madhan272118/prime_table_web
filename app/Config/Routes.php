<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('prime-table', 'PrimeTableController::index');
$routes->post('prime-table/generate', 'PrimeTableController::generate');

