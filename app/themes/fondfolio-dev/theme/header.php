<?php
global $language;

$nav_primary = array(
  'theme_location'  => 'nav_primary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

echo '<header role="banner" class="header">';

  echo '<div class="header__group ">';

    echo '<a href="' . get_bloginfo('url') . '" class="logo">';

    echo '<span class="">' . get_bloginfo('name') . '</span>';

    echo '</a>';

    echo '<span class="header__item spinner spinner--right">';
    // Loading
    echo '</span>';

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


    echo '<div class="spinner">';

      echo '<span class="loading open-circle"></span>';

    echo '</div>';

  echo '</div>';

echo '</header>';

