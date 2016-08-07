<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

$route['owner'] = 'owner';
$route['administrasi'] = 'administrasi';
$route['purchasing'] = 'purchasing';
$route['logout'] = 'login/logout';

$route['owner/user'] = 'user';
$route['owner/user/tambah'] = 'user/tambah';
$route['owner/user/(:num)/edit'] = 'user/edit/$1';
$route['owner/user/(:num)/hapus'] = 'user/hapus/$1';

$route['owner/laporan/servis'] = 'laporan/report_servis';
$route['owner/laporan/suku_cadang'] = 'laporan/report_suku_cadang';
$route['owner/laporan/pembayaran'] = 'laporan/report_pembayaran';

$route['administrasi/mobil'] = 'mobil';
$route['administrasi/mobil/tambah'] = 'mobil/tambah';
$route['administrasi/mobil/(:num)/edit'] = 'mobil/edit/$1';
$route['administrasi/mobil/(:num)/hapus'] = 'mobil/hapus/$1';
$route['administrasi/mobil/(:num)/detail'] = 'mobil/detail/$1';

$route['administrasi/sdm'] = 'sdm';
$route['administrasi/sdm/tambah'] = 'sdm/tambah';
$route['administrasi/sdm/(:num)/edit'] = 'sdm/edit/$1';
$route['administrasi/sdm/(:num)/hapus'] = 'sdm/hapus/$1';

$route['administrasi/layanan'] = 'layanan';
$route['administrasi/layanan/tambah'] = 'layanan/tambah';
$route['administrasi/layanan/(:num)/edit'] = 'layanan/edit/$1';
$route['administrasi/layanan/(:num)/hapus'] = 'layanan/hapus/$1';

$route['administrasi/work_order'] = 'work_order';
$route['administrasi/work_order/cari_nopol'] = 'work_order/cari_nopol';
$route['administrasi/work_order/(:num)/detail'] = 'work_order/detail/$1';
$route['administrasi/work_order/tambah'] = 'work_order/tambah';
// $route['administrasi/work_order/(:num)/edit'] = 'work_order/edit/$1';
// $route['administrasi/work_order/(:num)/hapus'] = 'work_order/hapus/$1';

$route['administrasi/servis'] = 'servis';
$route['administrasi/servis/(:num)/detail'] = 'servis/detail/$1'; //num = id_wo
$route['administrasi/servis/tambah'] = 'servis/tambah';
$route['administrasi/servis/(:num)/hapus'] = 'servis/hapus/$1';

$route['administrasi/pembayaran/(:num)/detail'] = 'pembayaran/detail/$1';
$route['administrasi/pembayaran/bayar'] = 'pembayaran/bayar';

$route['purchasing/sc'] = 'sc';
$route['purchasing/sc/tambah'] = 'sc/tambah';
$route['purchasing/sc/(:num)/edit'] = 'sc/edit/$1';
$route['purchasing/sc/(:num)/detail'] = 'sc/detail/$1';
$route['purchasing/sc/(:num)/hapus'] = 'sc/hapus/$1';

$route['purchasing/supplier'] = 'supplier';
$route['purchasing/supplier/tambah'] = 'supplier/tambah';
$route['purchasing/supplier/(:num)/edit'] = 'supplier/edit/$1';
$route['purchasing/supplier/(:num)/hapus'] = 'supplier/hapus/$1';
