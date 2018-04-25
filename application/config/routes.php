<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['profil']='home/controllerprofil';

$route['halaman-awal']='home/basic_table';
$route['pencarian']='home/map_google';
$route['404_override'] = 'controllererror';

$route['translate_uri_dashes'] = FALSE;
