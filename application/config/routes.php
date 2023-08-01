<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome/sitio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['sitio'] = 'welcome/sitio';
$route['productos'] = 'welcome/productos';
$route['filtrar'] = 'welcome/filtrar';
$route['personas'] = 'welcome/personas';
$route['contacto'] = 'welcome/contacto';
$route['guardar'] = 'welcome/guardar';
$route['guardar2'] = 'welcome/guardar2';
$route['administrador'] = 'yoni';

$route['editar'] = 'yoni/editar';

$route['eliminar/(:any)'] = 'yoni/Eliminar/$1';
$route['eliminar2/(:any)'] = 'yoni/EliminarCarrito/$1';
$route['modificar-v/(:any)'] = 'yoni/modificarVista/$1';

$route['iniciar'] = 'welcome/iniciar';
$route['verificar'] = 'welcome/verificar';

$route['cerrar'] = 'welcome/cerrar';
$route['cocina'] = 'welcome/cocina';
$route['camas'] = 'welcome/camas';
$route['chifonier'] = 'welcome/chifonier';
$route['comedores'] = 'welcome/comedores';
$route['muebles'] = 'welcome/muebles';
$route['sitioprodu'] = 'welcome/sitioprodu';
$route['listar'] = 'yoni/listar';
$route['informacion'] = 'welcome/informacion';
$route['carro'] = 'welcome/carro';
$route['ver_carrito'] = 'welcome/Ver_carrito';

$route['registro'] = 'welcome/registro';
$route['mostrarCarrito'] = 'yoni/mostrarCarrito';


