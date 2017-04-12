<?php

$icon = get_sub_field('icon');
$type = get_query_var('type');

$icon_type = $type === 'rows' ? 'doodle' : 'event';

echo '<div class="block__icon icon--' . $icon_type . '">';

  set_query_var( 'icon', $icon );

  get_template_part('partials/icon');

echo '</div>';

?>
