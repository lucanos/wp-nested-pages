<?php
/*
Plugin Name: Nested Pages
Plugin URI: http://nestedpages.com
Description: Adds intuitive drag and drop functionality for page sorting and nesting, while retaining the quick edit features you're used to.
Version: 1.0
Author: Kyle Phillips
Author URI: https://github.com/kylephillips
License: GPLv2 or later.
Copyright: Kyle Phillips
*/

/*  Copyright 2014 Kyle Phillips  (email : support@nestedpages.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if( !class_exists('NestedPages') ) :
	require_once('includes/class-nestedpages.php');
	$nested_pages = new NestedPages;
endif;