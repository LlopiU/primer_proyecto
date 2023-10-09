<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('catalogo', 'Home::catalogo');


/* rutas del Registro de Usuarios */
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');

/* rutas del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');



if(is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}