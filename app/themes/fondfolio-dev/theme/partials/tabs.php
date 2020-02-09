<?php

$is_help_page = is_post_type_archive('faqs');
$theme_location = $is_help_page ? 'nav_tabs' : 'nav_tabs_blog';

$nav_tabs = array(
  'theme_location'  => $theme_location,
  'container'       => false,
  'items_wrap'      => '%3$s',
);

echo '<nav class="tabs">';

  echo '<ul class="tabs__nav">';

    wp_nav_menu( $nav_tabs );

  echo '</ul>';

echo '</nav>';

?>
