<?php
defined('BASEPATH') or exit('No direct script access allowed');



$route['default_controller'] = 'front-end/Home_ctr';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index']             = 'front-end/Home_ctr';
$route['blacklist']         = 'front-end/Blacklist_ctr';
$route['login']             = 'front-end/Login_ctr';
$route['loginMe']           = 'front-end/Login_ctr/loginMe';
$route['register']          = 'front-end/Login_ctr/register';
$route['logout']            = 'front-end/Login_ctr/logout';
$route['blog_detail']       = 'front-end/Blog_ctr/blog_detail';
$route['blog_post']         = 'front-end/Blog_ctr/blog_post';
$route['blog_post_success'] = 'front-end/Blog_ctr/blog_post_add';
$route['contact']           = 'front-end/Contact_ctr/index';
$route['contact_add']       = 'front-end/Contact_ctr/contact_add';
$route['profile']           = 'front-end/Profile_ctr/profile';
$route['edit_profile']      = 'front-end/Profile_ctr/edit_profile';
$route['edit_password']     = 'front-end/Profile_ctr/edit_password';
$route['profile_post']      = 'front-end/Profile_ctr/profile_post';
