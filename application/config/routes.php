<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front/index';
$route['inscricao'] = 'front/inscricao';
$route['candidato'] = 'candidato/gerenciar';
$route['candidato/ver/(:any)'] = 'candidato/ver/$1';
$route['regulamento'] = 'front/regulamento';
$route['contato'] = 'front/contato';
$route['candidatos'] = 'candidato/listar';
$route['candidatos/(:any)'] = 'candidato/listar/$1';
$route['candidatos/buscar/(:any)'] = 'candidato/buscar/$1';
$route['candidatos/buscar/(:any)/(:any)'] = 'candidato/buscar/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
