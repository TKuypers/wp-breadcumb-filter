<?php
/*
Plugin Name: Breadcrumbs Filter
Version: 1.0
Plugin URI: http://expertees.nl
Description: Filter Yoast Breadcrumbs
Author: Expertees
Author URI: https://expertees.nl
License: GPL v3

Breadcrumbs Filter
Copyright (C) 2015, Expertees - info@expertees.nl

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function breadcrumb_shorten_text($str) 
{
	if(strlen($str) > 40)
	{
		return substr($str, 0, 40).'...';
	}

	return $str;
}

add_filter('wp_seo_get_bc_title', 'breadcrumb_shorten_text');