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
$routes->get('usuarios', 'Usuario_controller::listaUsuario');
$routes->get('usuarios/darDeBaja/(:num)', 'Usuario_controller::darDeBaja/$1');
$routes->get('usuarios/darDeAlta/(:num)', 'Usuario_controller::darDeAlta/$1');
$routes->get('usuarios/editarUsuario/(:num)', 'Usuario_controller::editarUsuario/$1');
$routes->add('usuarios/guardarEdicionU/(:num)', 'Usuario_controller::guardarEdicionU/$1');

$routes->get('productos', 'Producto_controller::listaProducto');
$routes->get('productos/darDeBaja/(:num)', 'Producto_controller::darDeBaja/$1');
$routes->get('productos/darDeAlta/(:num)', 'Producto_controller::darDeAlta/$1');
$routes->get('productos/editarProducto/(:num)', 'Producto_controller::editarProducto/$1');
$routes->add('productos/guardarEdicion/(:num)', 'Producto_controller::guardarEdicion/$1');




/* rutas del Registro de Usuarios */
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');

/* rutas del Registro de Productos */
$routes->get('/registrop','Producto_controller::create');
$routes->post('/enviar-formp','Producto_controller::formValidation');

/* rutas del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');



if(is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}