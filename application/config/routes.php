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
// $route['signup-patner'] = 'signup_patner';
// $route['signup-patner/validation'] = 'signup_patner/validation';
$route['ads'] = 'ads_detail';
$route['order/add'] = 'order/add';
$route['order/(:any)'] = 'order/show/$1';
$route['ads/(:any)'] = 'ads_detail/read/$1';
$route['term'] = 'syarat';
$route['about-us'] = 'tentang_kami';
$route['kategori'] = 'kategori';
$route['kategori/(:any)'] = 'kategori/sub/$1';
$route['valid'] = 'login/valid';
$route['cart'] = 'cart';
$route['konsultasi'] = 'konsultasi';
$route['konsultasi/post'] = 'konsultasi/post_data';
$route['dashboard/konsultasi'] = 'dashboard/konsultasi_admin';
$route['dashboard/konsultasi/history'] = 'dashboard/konsultasi_admin/get_history_konsultasi';
$route['dashboard/konsultasi/details/(:num)'] = 'dashboard/konsultasi_admin/detail_konsultasi/$1';
$route['dashboard/konsultasi/update/(:num)'] = 'dashboard/konsultasi_admin/update_status/$1';
$route['dashboard/kategori/add/sub'] = 'dashboard/kategori_admin/post_sub';
$route['logout'] = 'login/logout';
$route['forgot-pass'] = 'login/forgot_pass';
$route['process-forgot'] = 'login/process_forgot';
$route['dashboard'] = 'dashboard/profile';
$route['dashboard-cus'] = 'dashboard/profile/client';
$route['dashboard-cus/order'] = 'dashboard/order/client';
$route['dashboard-cus/change-avatar'] = 'dashboard/profile/change_avatar_client';
$route['paket/new-ads'] = 'dashboard/paket/new_ads';
$route['peralatan/new-ads'] = 'dashboard/peralatan/new_ads';
$route['peralatan/new-ads/post'] = 'dashboard/peralatan/post';
$route['peralatan'] = 'dashboard/peralatan';
$route['paket'] = 'dashboard/paket';
$route['api/sub-kategori/(:num)/(:num)'] = 'api/sub_kategori/$1/$2';
$route['api/all-ads'] = 'api/all_ads';
$route['api/ads/(:num)'] = 'api/ads/$1';
$route['api/all/ads/kategori/(:num)/(:num)/(:num)'] = 'api/ads_kategori/$1/$2/$3';
$route['api/user/ads/kategori/(:num)/(:num)/(:num)'] = 'api/ads_kategori_client/$1/$2/$3';
$route['api/all/ads/kategori-count/(:num)'] = 'api/ads_kategori_count/$1';
$route['api/user/ads/kategori-count/(:num)'] = 'api/ads_kategori_count_client/$1';
$route['api/ads/sub-kategori/(:any)/(:num)/(:num)'] = 'api/ads_sub_kategori/$1/$2/$3';
$route['api/cart/([a-z0-9]+)'] = 'api/get_cart/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
