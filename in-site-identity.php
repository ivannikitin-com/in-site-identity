<?php 
/**
 * Plugin Name: IN Site Identity
 * Plugin URI: https://github.com/ivannikitin-com/in-site-identity
 * Description: Управление логотипом сайта
 * Version: 0.0.1
 * Author: Иван Никитин и партнеры
 * Author URI: http://ivannikitin.com
 * Text domain: in-site-identity
 *
 * Copyright 2016 Ivan Nikitin  (email: info@ivannikitin.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Напрямую не вызываем!
if ( ! defined( 'ABSPATH' ) ) die( '-1' );

// Определения плагина
define( 'INSI', 		'in-site-identity' );				// Название плагина и текстовый домен
define( 'INSI_PATH', 	plugin_dir_path( __FILE__ ) );		// Путь к папке плагина
define( 'INSI_URL', 	plugin_dir_url( __FILE__ ) );		// URL к папке плагина
define( 'INSI_INC', 	INSI_PATH . '/inc' );				// Путь к файлам включения

// Инициализация плагина
add_action( 'init', 'insi_init' );
function insi_init() 
{
	// Локализация плагина
	load_plugin_textdomain( INTEAM, false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
}

// Хуки и функции
require_once( INSI_INC . '/wp-login-logo.php' );