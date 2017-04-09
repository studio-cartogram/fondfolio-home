<?php

echo '<div class="static__content row">';

  echo '<div class="column column-6-tablet ">';

    echo '<div class="soft-duo--bottom paragraph--lead">';

      the_content();

    echo '</div>';

  echo '</div>';

echo '</div>';

set_query_var('context', 'faqs');
get_template_part('partials/loop', 'faqs');

?>
