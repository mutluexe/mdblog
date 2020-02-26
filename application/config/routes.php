<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Posts route
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

//Default route
$route['default_controller'] = 'pages/view';

//Categories route
$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';


$route['(:any)'] = 'pages/view/$1';
