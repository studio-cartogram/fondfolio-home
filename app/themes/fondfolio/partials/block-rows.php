<?php

$type = get_query_var('type');

echo '<div class="row row--justify-center block block--' . $type . '">';

  echo '<div class="column column-10-tablet">';

  echo '<div class="row row--align-center">';

    echo '<div class="column column-4-tablet">';

      get_template_part('partials/block-icon');

    echo '</div>';

    echo '<div class="column column-8-tablet">';

      get_template_part('partials/block-content');

    echo '</div>';

  echo '</div>';

  echo '</div>';

echo '</div>';

?>
