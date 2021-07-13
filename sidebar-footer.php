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
 * The sidebar-footer file - container for footer widgets
 */
?>

<aside id="freesia-footer-widgets">

  <?php if( is_active_sidebar( 'footer-sidebar-left' ) ): ?>
    <?php dynamic_sidebar( 'footer-sidebar-left' ) ?>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'footer-sidebar-middle' ) ): ?>
    <?php dynamic_sidebar( 'footer-sidebar-middle' ) ?>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'footer-sidebar-right' ) ): ?>
    <?php dynamic_sidebar( 'footer-sidebar-right' ) ?>
  <?php endif; ?>

</aside>
