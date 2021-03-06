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
 * Home page template file
 */
?>

<?php get_header() ?>

<main>

  <div id="main-content-wrapper">

    <article class="freesia-article">

      <?php get_template_part('content') ?>

      <?php if( is_active_sidebar( 'front-page-sidebar' ) ): ?>
        <?php get_sidebar('main') ?>
      <?php endif; ?>

    </article>

  </div>

  <?php if( is_active_sidebar( 'front-page-widget1' ) ): ?>
    <?php get_sidebar('front1') ?>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'front-page-widget2' ) ): ?>
    <?php get_sidebar('front2') ?>
  <?php endif; ?>

</main>

<?php get_footer() ?>
