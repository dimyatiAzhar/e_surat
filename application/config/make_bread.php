<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// $config['include_home'] will tell the library if the first element should be the homepage. You only put the title of the first crumb. If you leave it blank it will not put homepage as first crumb
$config['include_home'] = 'First page';
// $config['divider'] is the divider you want between the crumbs. Leave blank if you don't want a divider;
$config['divider'] = '&nbsp;&nbsp;/&nbsp;&nbsp;';
// $config['container_open'] is the opening tag of the breadcrumb container
$config['container_open'] = '<ol class="breadcrumb-item float-sm-right">';
// $config['container_close'] is the closing tag of the breadcrumb container
$config['container_close'] = '</ol>';
$config['item_open'] = '<li class="breadcrumb-item">';
$config['item_close'] = '</li>';
// $config['crumb_open'] is the opening tag of the crumb container
$config['crumb_open'] = '';
// $config['crumb_close'] is the closing tag of the crumb container
$config['crumb_close'] = '';