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
