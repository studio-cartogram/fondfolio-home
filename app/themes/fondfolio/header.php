<?php
global $language;

$nav_primary = array(
  'theme_location'  => 'nav_primary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

echo '<header role="banner" class="js-header header">';

  echo '<div class="header__group ">';

    echo '<a href="' . get_bloginfo('url') . '" class="logo">';

    echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';

      echo '<span class="logo__icon">';

        set_query_var( 'icon', 'logo-icon' );

        get_template_part('partials/icon');

      echo '</span>';

      echo '<span class="logo__full">';

        set_query_var( 'icon', 'logo-full' );

        get_template_part('partials/icon');

      echo '</span>';

    echo '</a>';

  echo '</div>';

  echo '<div class="header__group header__group--right">';

    echo '<div class="js-nav-toggle hamburger nav-toggle">';

      echo '<span class="line"></span>';
      echo '<span class="line"></span>';
      echo '<span class="line"></span>';

    echo '</div>';

    echo '<ul class="header__nav list list--right list--spaced-horizontal ">';

      wp_nav_menu( $nav_primary );

    echo '</ul>';

  echo '</div>';

echo '</header>';

