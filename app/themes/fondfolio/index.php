<?php

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

get_template_part('partials/nav');

echo '<main id="main" role="main" class="main">';

echo '<div id="barba-wrapper">';

  echo '<div class="barba-container">';

    get_template_part('partials/archive-mast');
    get_template_part('partials/archive-search');
    get_template_part('partials/tabs');

    echo '<div class="scene__item scene__item--fadinup row row--justify-center">';

    echo '<div class="column column-10-tablet column-7-laptop">';

      get_template_part('partials/loop');

    echo '</div>';

    echo '</div>';

  echo '</div>';

echo '</div>';

echo '</main>';

get_footer();

get_template_part('partials/curtain');

get_template_part('partials/foot');
