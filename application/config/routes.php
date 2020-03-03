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
$route['default_controller'] = 'welcome';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route[''] = '';
// custom route
$route['Student-Credit-Card'] = 'Welcome/student_card/'; 
$route['Mbbs-Abroad'] = 'Welcome/mbbs_abroad/';
$route['PG-Abroad'] = 'Welcome/pg_abroad/';
$route['PG-India'] = 'Welcome/pg_india';
$route['MBA-India'] = 'Welcome/mba_india';
$route['MBA-Abroad'] = 'Welcome/mba_abroad/';
$route['Engineering-Colleges'] = 'Welcome/engineering';
$route['NEET-PG-Rankpredictor'] = 'Welcome/neetpgrankpredictor/';
$route['Jee-Main-Rankpredictor'] = 'Welcome/jeemainrankpredictor';
$route['Apply-Now'] = 'Welcome/applynow';
$route['Login'] = 'Welcome/login';
$route['mba-pgdm-admission'] = 'Welcome/mbapgdm';
$route['neet-pg-md-ms'] = 'Welcome/neetpgmdms';
$route['mbbs-in-bangladesh'] = 'Welcome/mbbsbangladesh';
$route['mbbs-in-china'] = 'Welcome/mbbschina';
$route['mbbs-in-georgia'] = 'Welcome/mbbsgeorgia';
$route['mbbs-in-kazakhstan'] = 'Welcome/mbbskazakhstan';
$route['mbbs-in-krzysthan'] = 'Welcome/mbbskrzysthan';
$route['mbbs-in-india'] = 'Welcome/mbbsindia';
$route['md-ms-admission'] = 'Welcome/mdmsadmission'; 
$route['engineering-in-india'] = 'Welcome/engineeringinindia';
$route['blog'] = 'Welcome/blog';
$route['blog-detail/(:num)/(:any)'] = "Welcome/blogdetail/";
$route['contact-us'] = 'Welcome/contact';