<?php
global $language;


echo '<header role="banner" class="header">';

  echo '<div class="header__group ">';

    echo '<div class="js-nav-toggle hamburger nav-toggle">';

      echo '<span class="line"></span>';
      echo '<span class="line"></span>';
      echo '<span class="line"></span>';

    echo '</div>';

    echo '<div class="spinner">';

      echo '<span class="loading open-circle"></span>';

    echo '</div>';

  echo '</div>';

  echo '<div class="header__group header__group--right">';

    echo '<a href="' . get_bloginfo('url') . '" class="logo">';

    echo '<span class="">' . get_bloginfo('name') . '</span>';

    echo '</a>';

      echo '<span class="header__item spinner spinner--right">';
      // Loading
      echo '</span>';

  echo '</div>';

echo '</header>';

