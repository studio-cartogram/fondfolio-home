<?php

$type = get_query_var('type');

echo '<div class="column column-6-tablet column-3-laptop block block--' . $type . '">';

  get_template_part('partials/block-icon');
  get_template_part('partials/block-content');

echo '</div>';

?>
