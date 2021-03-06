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
 * The main template file
 */
?>

<?php get_header() ?>

<main>

<div id="main-content-wrapper">
  <?php get_template_part('content') ?>
</div>

</main>

<?php get_footer() ?>
