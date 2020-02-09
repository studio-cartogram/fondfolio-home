<?php
/**
 * Template Name: Landing
 * 
*/

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

get_template_part('partials/nav');

echo '<main id="main" role="main" class="main">';

echo '<div id="barba-wrapper">';

  echo '<div class="barba-container" data-namespace="landing">';

  get_template_part('partials/loop-sections');

  get_template_part('partials/global-pricing');

  get_template_part('partials/global-instagram');

  echo '</div>';

echo '</div>';

echo '</main>';

get_footer();

get_template_part('partials/curtain');

get_template_part('partials/foot');
