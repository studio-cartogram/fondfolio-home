<?php

$next_post = get_next_post();
$prev_post = get_previous_post();

echo '<section class="prevnext">';

  if (!empty( $next_post )):
    echo '<a class="prevnext__link" href="' . get_permalink($next_post->ID) . '">';
      echo '<span class="visuallyhidden">' . $next_post->post_title . '</span>';
      set_query_var( 'context', 'prevnext' );
      set_query_var( 'icon', 'arrow-left' );
      get_template_part('partials/icon');
    echo '</a>';
  endif;

  if (!empty( $prev_post )):
    echo '<a class="prevnext__link prevnext__link--right" href="' . get_permalink($prev_post->ID) . '">';
      echo '<span class="visuallyhidden">' . $prev_post->post_title . '</span>';
      set_query_var( 'context', 'prevnext' );
      set_query_var( 'icon', 'arrow-right' );
      get_template_part('partials/icon');
    echo '</a>';
  endif;

echo '</section>';

?>
