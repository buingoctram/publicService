<?php
/* 
 * Author: Tuan ThaiManh
 */


if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('system/site.php');

load_header();
load_menubar('logged-in');
load_leftbar('blank');
load_content('admin/success');
load_rightbar('blank');
load_footer();
?>