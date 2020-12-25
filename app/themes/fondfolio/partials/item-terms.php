<?php

$item = get_query_var('item');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));
$categories = wp_get_post_terms($item->ID, 'category', array("fields" => "all"));
$context = get_query_var('context');
$subtitle = get_field('subtitle');

echo '<article id="' . $item->post_name . '" class="blogpost blogpost---' . $context . '">';

    echo '<div class="blogpost-mast">';

      echo '<h2><a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></h2>';

      if ($context === 'single') :

        echo '<h3 class="blogpost-subtitle">'. $subtitle .'</h3>'; 

      endif;
  
    echo '</div>';

    echo '<div class="format blogpost-content">';

      if ($context === 'single') {

          echo '<div class="format blogpost-words terms-words">';
            the_content();
            echo '</div>';

        echo '</div>';

      } else {

      the_excerpt();

        }

    echo '</div>';

echo '</article>';

?>
