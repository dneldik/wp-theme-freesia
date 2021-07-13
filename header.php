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
 * The header template file
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php the_title() ?></title>

  <?php wp_head() ?>

</head>

<body>

  <div id="wptime-plugin-preloader"></div>

  <header id="main-header">
    <?php
      echo '<div id="title-logo-wrapper"><h1>';
      bloginfo('name');
      echo '</h1><div>';

      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
      echo "</div></div>";

      if ( has_nav_menu( 'primary_nav' ) ) {
        wp_nav_menu([
          'theme_location'        => 'primary_nav',
          'menu_id'               => 'desktop-nav',
          'menu_class'            => 'menu',
          'container'             => 'nav',
          'container_class'       => 'expanded',
          'container_id'          => 'desktop-menu-wrapper',
          'container_aria_label'  => '' //todo: place here some aria label
        ]);
        wp_nav_menu([
          'theme_location'        => 'primary_nav',
          'menu_id'               => 'mobile-nav',
          'menu_class'            => 'menu',
          'container'             => 'nav',
          'container_class'       => 'collapsed',
          'container_id'          => 'mobile-menu-wrapper',
          'container_aria_label'  => '' //todo: place here some aria label
        ]);
      }

    ?>

    <?php if ( has_nav_menu( 'primary_nav' ) ) : ?>

    <button id="hamburger" class="hamburger-button">
      <span class="hamburger-wrapper">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <?php endif; ?>
  </header>