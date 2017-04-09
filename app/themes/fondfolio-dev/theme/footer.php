<?php

$nav_footer = array(
    'theme_location'  => 'nav_footer',
    'container'       => false,
    'items_wrap'      => '%3$s',
);

set_query_var( 'icon', 'logo-icon' );

echo '<footer class="footer">';

  echo '<nav role="navigation" class="footer__nav footer__nav--left">';

    echo '<ul class="list list--spaced-horizontal list--small">';

      wp_nav_menu( $nav_footer );

    echo '</ul>';

  echo '</nav>';

  echo '<nav role="navigation" class="footer__nav footer__nav--right">';

    echo '<ul class="list--spaced-horizontal list list--right list--small">';


    echo '</ul>';

  echo '</nav>';

  // echo '<a class="visuallyhidden clearvisuallyhidden--tablet footer__icon " href="' . get_bloginfo('url') . '">';
  //
  //   get_template_part('partials/icon');
  //
  // echo '</a>';


echo '</footer>';
?>
