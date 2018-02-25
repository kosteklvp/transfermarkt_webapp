<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['transfery/create'] = 'transfery/create';
$route['transfery/(:any)'] = 'transfery/view/$1';
$route['transfery'] = 'transfery/index';

$route['pilkarze/create'] = 'pilkarze/create';
$route['pilkarze/(:any)'] = 'pilkarze/view/$1';
$route['pilkarze'] = 'pilkarze/index';

$route['trenerzy/create'] = 'trenerzy/create';
$route['trenerzy/(:any)'] = 'trenerzy/view/$1';
$route['trenerzy'] = 'trenerzy/index';

$route['ligi/create'] = 'ligi/create';
$route['ligi/(:any)'] = 'ligi/view/$1';
$route['ligi'] = 'ligi/index';

$route['kluby/create'] = 'kluby/create';
$route['kluby/(:any)'] = 'kluby/view/$1';
$route['kluby'] = 'kluby/index';



$route['default_controller'] = 'transfery/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
