<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin_login'] = 'welcome';
$route['add-student'] = 'welcome/add_student';
$route['save-student'] = 'welcome/save_student';
$route['view-student'] = 'welcome/view_student';

$route['edit-student/(.+)'] = 'welcome/edit_student/$1';

$route['update-student'] = 'welcome/update_student';

$route['delete-student/(.+)'] = 'welcome/delete_student/$1';

$route['show-student/(.+)'] = 'welcome/show_student/$1';

$route['edit-admin'] = 'LearnHunter/edit_admin';

$route['save-admin'] = 'LearnHunter/save_admin';
$route['view-admin'] = 'LearnHunter/view_admin';