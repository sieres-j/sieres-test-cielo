<?php
defined('BASEPATH') OR exit('No direct script access allowed');


;
$route['users'] = 'users/index';
$route['users/create'] = 'users/create';
$route['users/store'] = 'users/store';
$route['users/destroy'] = 'users/destroy';
$route['users/edit'] = 'users/edit/$1';
$route['users/update'] = 'users/update';
$route['users/(:any)'] = 'users/view/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
