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
$route['webapp'] = 'Webapp/home';
$route['webapp/about'] = 'Webapp/about';
$route['webapp/reseach_topic'] = 'Webapp/research_topic';
$route['webapp/research_project'] = 'Webapp/research_project';
$route['webapp/archives_project'] = 'Webapp/archives_project';
$route['webapp/swarms_project'] = 'Webapp/swarms_project';
$route['webapp/news_events'] = 'Webapp/news_events';
$route['webapp/news'] = 'Webapp/news';
$route['webapp/seminars'] = 'Webapp/seminars';
$route['webapp/news1'] = 'Webapp/news1';
$route['webapp/news2'] = 'Webapp/news2';
$route['webapp/news3'] = 'Webapp/news3';
$route['webapp/news4'] = 'Webapp/news4';
$route['webapp/news5'] = 'Webapp/news5';
$route['webapp/news7'] = 'Webapp/news7';
$route['webapp/members'] = 'Webapp/members';
$route['webapp/contact'] = 'Webapp/contact';
$route['webapp/blank'] = 'Webapp/blank';
$route['webapp/older_posts'] = 'Webapp/older_posts';
$route['webapp/news_page2'] = 'Webapp/news_page2';
$route['webapp/register'] = 'Webapp/register';
$route['webapp/login'] = 'Webapp/login';
$route['webapp/logout'] = 'Webapp/logout';
$route['webapp/reset'] = 'Webapp/reset';
$route['webapp/reset_pass'] = 'Webapp/reset_pass';
$route['webapp/profile'] = 'Webapp/profile';
$route['admin'] = 'Admin';
