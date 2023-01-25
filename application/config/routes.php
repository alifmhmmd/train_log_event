<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//routes daop1
$route['daop_1/'] = 'gangguan/index';
$route['daop_1/gangguan'] = 'gangguan/index';
$route['daop_1/gangguan/(:num)'] = 'gangguan/index/$1';
$route['daop_1/add_data'] = 'gangguan/add_data';
$route['daop_1/export_data_excel'] = 'gangguan/export_data_excel';
$route['daop_1/delete_data/(:num)'] = 'gangguan/delete_data/$1';
$route['daop_1/gangguan/delete_data/(:num)'] = 'gangguan/delete_data/$1';
$route['daop_1/edit_data/(:num)'] = 'gangguan/edit_data/$1';
$route['daop_1/gangguan/edit_data/(:num)'] = 'gangguan/edit_data/$1';
//routes daop_2
$route['daop_2/'] = 'gangguan_daop2/index';
$route['daop_2/gangguan'] = 'gangguan_daop2/index';
$route['daop_2/gangguan/(:num)'] = 'gangguan_daop2/index/$1';
$route['daop_2/add_data'] = 'gangguan_daop2/add_data';
$route['daop_2/export_data_excel'] = 'gangguan_daop2/export_data_excel';
$route['daop_2/delete_data/(:num)'] = 'gangguan_daop2/delete_data/$1';
$route['daop_2/gangguan/delete_data/(:num)'] = 'gangguan_daop2/delete_data/$1';
$route['daop_2/edit_data/(:num)'] = 'gangguan_daop2/edit_data/$1';
$route['daop_2/gangguan/edit_data/(:num)'] = 'gangguan_daop2/edit_data/$1';
//routes daop_3
$route['daop_3/gangguan'] = 'gangguan_daop3/index';
$route['daop_3/gangguan/(:num)'] = 'gangguan_daop3/index/$1';
$route['daop_3/add_data'] = 'gangguan_daop3/add_data';
$route['daop_3/export_data_excel'] = 'gangguan_daop3/export_data_excel';
$route['daop_3/delete_data/(:num)'] = 'gangguan_daop3/delete_data/$1';
$route['daop_3/gangguan/delete_data/(:num)'] = 'gangguan_daop3/delete_data/$1';
$route['daop_3/edit_data/(:num)'] = 'gangguan_daop3/edit_data/$1';
$route['daop_3/gangguan/edit_data/(:num)'] = 'gangguan_daop3/edit_data/$1';
//routes daop_4
$route['daop_4/gangguan'] = 'gangguan_daop4/index';
$route['daop_4/gangguan/(:num)'] = 'gangguan_daop4/index/$1';
$route['daop_4/add_data'] = 'gangguan_daop4/add_data';
$route['daop_4/export_data_excel'] = 'gangguan_daop4/export_data_excel';
$route['daop_4/delete_data/(:num)'] = 'gangguan_daop4/delete_data/$1';
$route['daop_4/gangguan/delete_data/(:num)'] = 'gangguan_daop4/delete_data/$1';
$route['daop_4/edit_data/(:num)'] = 'gangguan_daop4/edit_data/$1';
$route['daop_4/gangguan/edit_data/(:num)'] = 'gangguan_daop4/edit_data/$1';
//routes daop_5
$route['daop_5/gangguan'] = 'gangguan_daop5/index';
$route['daop_5/gangguan/(:num)'] = 'gangguan_daop5/index/$1';
$route['daop_5/add_data'] = 'gangguan_daop5/add_data';
$route['daop_5/export_data_excel'] = 'gangguan_daop5/export_data_excel';
$route['daop_5/delete_data/(:num)'] = 'gangguan_daop5/delete_data/$1';
$route['daop_5/gangguan/delete_data/(:num)'] = 'gangguan_daop5/delete_data/$1';
$route['daop_5/edit_data/(:num)'] = 'gangguan_daop5/edit_data/$1';
$route['daop_5/gangguan/edit_data/(:num)'] = 'gangguan_daop5/edit_data/$1';
//routes daop_6
$route['daop_6/gangguan'] = 'gangguan_daop6/index';
$route['daop_6/gangguan/(:num)'] = 'gangguan_daop6/index/$1';
$route['daop_6/add_data'] = 'gangguan_daop6/add_data';
$route['daop_6/export_data_excel'] = 'gangguan_daop6/export_data_excel';
$route['daop_6/delete_data/(:num)'] = 'gangguan_daop6/delete_data/$1';
$route['daop_6/gangguan/delete_data/(:num)'] = 'gangguan_daop6/delete_data/$1';
$route['daop_6/edit_data/(:num)'] = 'gangguan_daop6/edit_data/$1';
$route['daop_6/gangguan/edit_data/(:num)'] = 'gangguan_daop6/edit_data/$1';
//routes daop_7
$route['daop_7/gangguan'] = 'gangguan_daop7/index';
$route['daop_7/gangguan/(:num)'] = 'gangguan_daop7/index/$1';
$route['daop_7/add_data'] = 'gangguan_daop7/add_data';
$route['daop_7/export_data_excel'] = 'gangguan_daop7/export_data_excel';
$route['daop_7/delete_data/(:num)'] = 'gangguan_daop7/delete_data/$1';
$route['daop_7/gangguan/delete_data/(:num)'] = 'gangguan_daop7/delete_data/$1';
$route['daop_7/edit_data/(:num)'] = 'gangguan_daop7/edit_data/$1';
$route['daop_7/gangguan/edit_data/(:num)'] = 'gangguan_daop7/edit_data/$1';
//routes daop_8
$route['daop_8/gangguan'] = 'gangguan_daop8/index';
$route['daop_8/gangguan/(:num)'] = 'gangguan_daop8/index/$1';
$route['daop_8/add_data'] = 'gangguan_daop8/add_data';
$route['daop_8/export_data_excel'] = 'gangguan_daop8/export_data_excel';
$route['daop_8/delete_data/(:num)'] = 'gangguan_daop8/delete_data/$1';
$route['daop_8/gangguan/delete_data/(:num)'] = 'gangguan_daop8/delete_data/$1';
$route['daop_8/edit_data/(:num)'] = 'gangguan_daop8/edit_data/$1';
$route['daop_8/gangguan/edit_data/(:num)'] = 'gangguan_daop8/edit_data/$1';
//routes daop_9
$route['daop_9/gangguan'] = 'gangguan_daop9/index';
$route['daop_9/gangguan/(:num)'] = 'gangguan_daop9/index/$1';
$route['daop_9/add_data'] = 'gangguan_daop9/add_data';
$route['daop_9/export_data_excel'] = 'gangguan_daop9/export_data_excel';
$route['daop_9/delete_data/(:num)'] = 'gangguan_daop9/delete_data/$1';
$route['daop_9/gangguan/delete_data/(:num)'] = 'gangguan_daop9/delete_data/$1';
$route['daop_9/edit_data/(:num)'] = 'gangguan_daop9/edit_data/$1';
$route['daop_9/gangguan/edit_data/(:num)'] = 'gangguan_daop9/edit_data/$1';
//routes divre_1
$route['divre_1/gangguan'] = 'gangguan_divre1/index';
$route['divre_1/gangguan/(:num)'] = 'gangguan_divre1/index/$1';
$route['divre_1/add_data'] = 'gangguan_divre1/add_data';
$route['divre_1/export_data_excel'] = 'gangguan_divre1/export_data_excel';
$route['divre_1/delete_data/(:num)'] = 'gangguan_divre1/delete_data/$1';
$route['divre_1/gangguan/delete_data/(:num)'] = 'gangguan_divre1/delete_data/$1';
$route['divre_1/edit_data/(:num)'] = 'gangguan_divre1/edit_data/$1';
$route['divre_1/gangguan/edit_data/(:num)'] = 'gangguan_divre1/edit_data/$1';
//routes divre_2
$route['divre_2/gangguan'] = 'gangguan_divre2/index';
$route['divre_2/gangguan/(:num)'] = 'gangguan_divre2/index/$1';
$route['divre_2/add_data'] = 'gangguan_divre2/add_data';
$route['divre_2/export_data_excel'] = 'gangguan_divre2/export_data_excel';
$route['divre_2/delete_data/(:num)'] = 'gangguan_divre2/delete_data/$1';
$route['divre_2/gangguan/delete_data/(:num)'] = 'gangguan_divre2/delete_data/$1';
$route['divre_2/edit_data/(:num)'] = 'gangguan_divre2/edit_data/$1';
$route['divre_2/gangguan/edit_data/(:num)'] = 'gangguan_divre2/edit_data/$1';
//routes divre_3
$route['divre_3/gangguan'] = 'gangguan_divre3/index';
$route['divre_3/gangguan/(:num)'] = 'gangguan_divre3/index/$1';
$route['divre_3/add_data'] = 'gangguan_divre3/add_data';
$route['divre_3/export_data_excel'] = 'gangguan_divre3/export_data_excel';
$route['divre_3/delete_data/(:num)'] = 'gangguan_divre3/delete_data/$1';
$route['divre_3/gangguan/delete_data/(:num)'] = 'gangguan_divre3/delete_data/$1';
$route['divre_3/edit_data/(:num)'] = 'gangguan_divre3/edit_data/$1';
$route['divre_3/gangguan/edit_data/(:num)'] = 'gangguan_divre3/edit_data/$1';
//routes divre_4
$route['divre_4/gangguan'] = 'gangguan_divre4/index';
$route['divre_4/gangguan/(:num)'] = 'gangguan_divre4/index/$1';
$route['divre_4/add_data'] = 'gangguan_divre4/add_data';
$route['divre_4/export_data_excel'] = 'gangguan_divre4/export_data_excel';
$route['divre_4/delete_data/(:num)'] = 'gangguan_divre4/delete_data/$1';
$route['divre_4/gangguan/delete_data/(:num)'] = 'gangguan_divre4/delete_data/$1';
$route['divre_4/edit_data/(:num)'] = 'gangguan_divre4/edit_data/$1';
$route['divre_4/gangguan/edit_data/(:num)'] = 'gangguan_divre4/edit_data/$1';
//kantor Pusat
$route['kantor_pusat/(:num)'] = 'kantor_pusat/$1';
