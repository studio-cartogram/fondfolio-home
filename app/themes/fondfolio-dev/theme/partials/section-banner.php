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

echo '<h1>' . $title . '</h1>';
echo '<p class="large">' . $description . '</p>';
echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';

if( $video ) :

  echo 'Put the video in the background';

else :

  echo wp_get_attachment_image( $image, $size );

endif;

?>
