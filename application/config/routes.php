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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['signup-patner'] = 'signup_patner';
$route['ads-detail'] = 'ads_detail';
$route['term'] = 'syarat';
$route['about-us'] = 'tentang_kami';
$route['kategori-detail'] = 'kategori_detail';
$route['valid'] = 'login/valid';
$route['cart'] = 'cart';
$route['logout'] = 'login/logout';
$route['forgot-pass'] = 'login/forgot_pass';
$route['process-forgot'] = 'login/process_forgot';
$route['dashboard'] = 'dashboard/profile';
$route['dashboard-cus'] = 'dashboard/profile/client';
$route['paket/new-ads'] = 'dashboard/paket/new_ads';
$route['peralatan/new-ads'] = 'dashboard/peralatan/new_ads';
$route['peralatan/new-ads/post'] = 'dashboard/peralatan/post';
$route['peralatan'] = 'dashboard/peralatan';
$route['paket'] = 'dashboard/paket';
$route['api/sub-kategori/(:num)/(:num)'] = 'api/sub_kategori/$1/$2';
$route['api/all-ads'] = 'api/all_ads';
$route['api/ads/(:num)'] = 'api/ads/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
