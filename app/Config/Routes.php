<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Usuarios');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Usuarios::login');
$routes->get('login', 'Usuarios::login');
$routes->get('register', 'Usuarios::nuevo');
$routes->post('crear-usuario', 'Usuarios::insertar');
$routes->post('/inicio-sesion', 'Usuarios::validar');
$routes->get('salir', 'Usuarios::logout');
$routes->get('ver-registros', 'Home::registro');

/*libro fisico*/
$routes->get('BibliotecaUMC', 'Home::index');
$routes->get('consultar', 'Home::consultar');
$routes->get('listarlibro', 'Libros::index');
$routes->get("crearlibro", "Libros::crear");
$routes->post("guardar", "Libros::guardar");
$routes->get('borrarlibro/(:num)', 'Libros::borrar/$1');
$routes->get('editarlibro/(:any)', 'Libros::editar/$1');
$routes->post("actualizarlibro", "Libros::actualizar");

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
/*libro digital*/
$routes->get('listarlibrodigi', 'Libros_digitales::index');
$routes->get("crearlibrodigi", "Libros_digitales::crear");
$routes->post("guardarlibro-digi", "Libros_digitales::guardar");
$routes->get('borrarlibro-digi/(:num)', 'Libros_digitales::borrar/$1');
$routes->get('editarlibro-digi/(:num)', 'Libros_digitales::editar/$1');
$routes->post("actualizarlibro-digi", "Libros_digitales::actualizar");


/*ESTUDIANTES*/

$routes->get('listar-estudiantes', 'Estudiantes::index');
$routes->get("crear-estudiante", "Estudiantes::crear");
$routes->post("guardar-estudiante", "Estudiantes::guardar");
$routes->get('borrar-estudiante/(:any)', 'Estudiantes::borrar/$1');
$routes->get('editar-estudiante/(:any)', 'Estudiantes::editar/$1');
$routes->post("actualizar-estudiante", "Estudiantes::actualizar");

/*Prestamos*/
$routes->get('crear-prestamo', 'Prestamos::crear');
$routes->get('listar-prestamos', 'Prestamos::index');
$routes->post('guardar-prestamos', 'Prestamos::guardar');
$routes->get('borrar-prestamo/(:num)', 'Prestamos::borrar/$1');
$routes->get('editar-prestamo/(:any)', 'Prestamos::editar/$1');
$routes->post("actualizar-prestamo", "Prestamos::actualizar");


/*Autores*/
$routes->post('guardar-autor', 'Autores::guardar');
$routes->get('listar-autores', 'Autores::index');
$routes->get('crear-autor', 'Autores::crear');
$routes->get('borrar-autores/(:num)', 'Autores::borrar/$1');
$routes->get('editar-autores/(:num)', 'Autores::editar/$1');
$routes->post("actualizar-autores", "Autores::actualizar");

/*Carreras*/
$routes->get('listar-carreras', 'Carreras::index');
$routes->get('crear-carrera', 'Carreras::crear');
$routes->post('guardar-carreras', 'Carreras::guardar');
$routes->get('borrar-carreras/(:num)', 'Carreras::borrar/$1');

/*Editoriales*/
$routes->post('guardar-editorial', 'Editoriales::guardar');
$routes->get('listar-editoriales', 'Editoriales::index');
$routes->get('crear-editorial', 'Editoriales::crear');
$routes->get('borrar-editorial/(:num)', 'Editoriales::borrar/$1');

/*Usuarios*/

