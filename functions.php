<?php
/**
 * Freesia - simple and light Wordpress theme.
 * Copyright (C) 2021 dneldik
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * Contact me: dneldik@gmail.com
 * 
 * ---
 * Theme functions file 
 */

if (!function_exists('freesia_setup')):

  function freesia_setup() {

    /**
     * Add custom logo
     */
    $logo_width  = 120;
		$logo_height = 120;

		add_theme_support(
			'custom-logo',
			[
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true
      ]
		);

    /**
     * Add nav menus
     */
    register_nav_menus([
      'primary_nav' => 'Primary navigation',
      'footer_nav' => 'Footer navigation'
    ]);

  }
  
endif;

add_action('after_setup_theme', 'freesia_setup');

/**
 * Enqueue scripts and styles.
 */
function freesia_scripts() {
  $handle = 'navigation.js';
  $src = get_template_directory_uri() . '/assets/js/navigation.js';
  $deps = false;
  $ver = null;
  $in_footer = true;

  wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}

add_action( 'wp_enqueue_scripts', 'freesia_scripts' );

/**
 * Register widgets areas
 */
function freesia_register_sidebars() {
  register_sidebar([
    'id'            =>  'front-page-sidebar',
    'name'          =>  'Front page sidebar',
    'description'   =>  'Please add some additional information here',
    'before_widget' =>  '<div class="front-page-widget">',
    'after_widget'  =>  '</div>'
  ]);

  register_sidebar([
    'id'            =>  'front-page-widget1',
    'name'          =>  'Front page widget 1',
    'description'   =>  'Please add some additional content here',
    'before_widget' =>  '<div class="widget-area">',
    'after_widget'  =>  '</div>'
  ]);

  register_sidebar([
    'id'            =>  'front-page-widget2',
    'name'          =>  'Front page widget 2',
    'description'   =>  'Please add some additional content here',
    'before_widget' =>  '<div class="widget-area">',
    'after_widget'  =>  '</div>'
  ]);

  register_sidebar([
    'id'            =>  'footer-sidebar-left',
    'name'          =>  'Footer widget left',
    'description'   =>  'Please add your footer information here',
    'before_widget' =>  '<div class="footer-widget">',
    'after_widget'  =>  '</div>'
  ]);

  register_sidebar([
    'id'            =>  'footer-sidebar-middle',
    'name'          =>  'Footer widget middle',
    'description'   =>  'Please add your footer information here',
    'before_widget' =>  '<div class="footer-widget">',
    'after_widget'  =>  '</div>'
  ]);

  register_sidebar([
    'id'            =>  'footer-sidebar-right',
    'name'          =>  'Footer widget right',
    'description'   =>  'Please add your footer information here',
    'before_widget' =>  '<div class="footer-widget">',
    'after_widget'  =>  '</div>'
  ]);
}

add_action( 'widgets_init', 'freesia_register_sidebars' );

/**
 * Add basic stylesheets
 */
function freesia_basic_styles() {
  wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', false, '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', false, '1.1', 'all');
  wp_enqueue_style( 'content', get_template_directory_uri().'/assets/css/content.css', false, '1.1', 'all');
  wp_enqueue_style( 'footer', get_template_directory_uri().'/assets/css/footer.css', false, '1.1', 'all');
}
add_action( 'wp_enqueue_scripts', 'freesia_basic_styles' );

/**
 * Add stylesheets depending on the page 
 */
function freesia_front_page_styles() {
  if(is_front_page()) {
    wp_enqueue_style( 'frontpage', get_template_directory_uri().'/assets/css/frontpage.css', false, '1.1', 'all');
  }
}

add_action( 'wp_enqueue_scripts', 'freesia_front_page_styles');