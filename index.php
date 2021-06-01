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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/'style.css'">

  <title><?php bloginfo('name') ?></title>

  <?php wp_head() ?>

</head>
<body>
  <header>
    <h1>Freesia</h1>
  </header>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <p><?php the_title() ?></p>
    <p><?php the_content() ?></p>
    <hr>
  <?php endwhile; else: ?>
    <p>there is empty here</p>
  <?php endif; ?>

  <footer>
    <?php wp_footer() ?>
  </footer>
  
</body>
</html>
