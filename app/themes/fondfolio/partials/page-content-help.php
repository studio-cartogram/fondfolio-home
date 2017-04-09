<?php

$slug = $post->post_name;

$context = $slug === 'help' ? 'faqs' : $slug;

echo '<div class="row">';

  echo '<div class="column column-6-tablet ">';

    echo '<div class="soft-duo--bottom paragraph--lead">';

      the_content();

    echo '</div>';

  echo '</div>';

echo '</div>';

echo '<div class="row">';

  echo '<div class="column column-6-tablet ">';

    echo '<div class="soft-duo--bottom paragraph--lead">';

      set_query_var('context', $context);
      get_template_part('partials/loop', $context);

    echo '</div>';

  echo '</div>';

echo '</div>';


?>
