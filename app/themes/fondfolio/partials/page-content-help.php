<?php

$slug = $post->post_name;

$context = $slug === 'help' ? 'faqs' : $slug;

echo '<section class="page__content">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-10-tablet column-7-laptop">';

      set_query_var('context', $context);

      get_template_part('partials/loop', $context);

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
