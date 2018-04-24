<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['profil']='home/controllerprofil';
$route['404_override'] = 'controllererror';

$route['translate_uri_dashes'] = FALSE;
