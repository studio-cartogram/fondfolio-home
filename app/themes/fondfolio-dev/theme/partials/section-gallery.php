<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');
$size = 'full';
$video = get_sub_field('video');
$type = get_sub_field('type');
echo '<h2>' . $title . '</h2>';
echo '<p class="secondary">' . $subtitle . '</p>';

if( have_rows('images') ):

  echo '<ul>';

while ( have_rows('images') ) : the_row();

$image = get_sub_field('image');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

echo '<li>';

echo wp_get_attachment_image( $image, $size );

echo '</li>';

endwhile;

echo '</ul>';

endif;

echo '<p class="secondary">' . $description . '</p>';


?>
