<?php

$nav_footer = array(
  'theme_location'  => 'nav_footer',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$copyright = get_field('copyright', 'options');
$newsletter_text = get_field('newsletter_text', 'options');
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$twitter = get_field('twitter', 'options');
$newsletter_button_text = get_field('newsletter_button_text', 'options');

set_query_var( 'context', 'footer' );
set_query_var( 'icon', 'logo-icon' );

echo '<footer class="footer">';

  echo '<div class="row">';

    echo '<div class="soft-quad--bottom column column-3-tablet ">';

      echo '<a class="footer__icon">';

        echo '<span class="logo__icon">';

          set_query_var( 'icon', 'logo-icon' );

          get_template_part('partials/icon');

        echo '</span>';

      echo '</a>';

    echo '</div>';

    echo '<div class="soft-quad--bottom column column-3-tablet ">';

      echo '<ul class="list list--spaced-horizontal list--small">';

        echo '<li><a class="button button--circle" href="' . $instagram . '">';

          set_query_var( 'icon', 'instagram' );
          get_template_part('partials/icon');

        echo '</a></li>';

        echo '<li><a class="button button--circle" href="' . $twitter . '">';

          set_query_var( 'icon', 'twitter' );
          get_template_part('partials/icon');

        echo '</a></li>';

        echo '<li><a class="button button--circle" href="' . $facebook . '">';

          set_query_var( 'icon', 'facebook' );
          get_template_part('partials/icon');

        echo '</a></li>';

      echo '</ul>';

    echo '</div>';

    echo '<div class="soft-quad--bottom column column-3-tablet ">';

      echo '<ul class="list list--spaced-horizontal list--small">';

        wp_nav_menu( $nav_footer );

      echo '</ul>';

    echo '</div>';

    echo '<div class="soft-quad--bottom column column-3-tablet ">';

      echo '<p class="p--small">' . $newsletter_text . '</p>';

      echo '<p class="p--small"><a class="">' . $newsletter_button_text . '</a></p>';

    echo '</div>';

  echo '</div>';

echo '</footer>';
// echo '<p class="text-align-center">' . $copyright . '</p>';
?>
