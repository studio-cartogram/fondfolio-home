<?php

$type = get_query_var('type');

echo '<div class="row row--justify-center">';

  echo '<div class="column column-10-tablet block block--' . $type . '">';

  echo '<div class="row row--align-center">';

    echo '<div class="column column-4">';

      get_template_part('partials/block-icon');

    echo '</div>';

    echo '<div class="column column-8">';

      get_template_part('partials/block-content');

    echo '</div>';

  echo '</div>';

  echo '</div>';

echo '</div>';

?>
