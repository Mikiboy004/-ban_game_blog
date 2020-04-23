<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']            = 'Login_controller/login';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;

$route['Dashboard']                     = 'Dashboard_controller/dashboard';
$route['Login']                         = 'Login_controller/login';
$route['LoginMe']                       = 'Login_controller/loginMe';
$route['Logout']                        = 'Login_controller/logout';
$route['List-user']                     = 'User_controller/list_user';
// $route['List-Contact']                  = 'Contact_controller/list_Contact';
$route['List-slider']                     = 'Slider_controller/list_slider';
$route['slider_add_com']                  = 'Slider_controller/slider_add_com';
$route['silder_edit_com']                  = 'Slider_controller/silder_edit_com';
$route['delete_slider']                  = 'Slider_controller/delete_slider';
// $route['List-Order']                  = 'Order_controller/list_order';
// $route['Main_order']                  = 'Order_controller/main_order';
// $route['list_banner']                     = 'Banner_controller/list_banner';
// $route['banner_add_com']                     = 'Banner_controller/banner_add_com';
// $route['banner_edit_com']                     = 'Banner_controller/banner_edit_com';
// $route['delete_banner']                     = 'Banner_controller/delete_banner';
// $route['delete_Post']                     = 'Order_controller/delete_Post';
// $route['delete_comment']                     = 'Order_controller/delete_comment';



