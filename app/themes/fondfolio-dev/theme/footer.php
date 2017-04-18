<?php

$nav_footer = array(
  'theme_location'  => 'nav_footer',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$copyright = get_field('copyright', 'options');
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$twitter = get_field('twitter', 'options');

set_query_var( 'context', 'footer' );
set_query_var( 'icon', 'logo-icon' );

echo '<footer class="footer">';



  echo '<div class="row footer__inner">';

    echo '<div class="footer__left column column-6-tablet ">';

    //   echo '<p class="p--hard p--large secondary ">' . $newsletter_text . '</p>';
    //
    //  echo '<p class="p--hard p--large "><a class="link">' . $newsletter_button_text . '</a></p>';

    echo '</div>';

    echo '<div class="footer__right column column-6-tablet ">';

      get_template_part('partials/newsletter');

    echo '</div>';

    // echo '<div class="soft-quad--bottom column column-3-tablet ">';
    //
    //   echo '<ul class="footer__list list list--spaced-horizontal list--small">';
    //
    //     echo '<li><a class="button button--circle" href="' . $instagram . '">';
    //
    //       set_query_var( 'icon', 'instagram' );
    //       get_template_part('partials/icon');
    //
    //     echo '</a></li>';
    //
    //     echo '<li><a class="button button--circle" href="' . $twitter . '">';
    //
    //       set_query_var( 'icon', 'twitter' );
    //       get_template_part('partials/icon');
    //
    //     echo '</a></li>';
    //
    //     echo '<li><a class="button button--circle" href="' . $facebook . '">';
    //
    //       set_query_var( 'icon', 'facebook' );
    //       get_template_part('partials/icon');
    //
    //     echo '</a></li>';
    //
    //   echo '</ul>';
    //
    // echo '</div>';



  echo '</div>';

  echo '<a class="with-line footer__icon">';

    echo '<span class="logo__icon">';

      set_query_var( 'icon', 'logo-icon' );

      get_template_part('partials/icon');

    echo '</span>';

  echo '</a>';

  echo '<ul class="footer__list list--small list">';

    wp_nav_menu( $nav_footer );

  echo '</ul>';

  echo '<p class="p--small secondary ">' . $copyright . '</p>';

echo '</footer>';
?>
