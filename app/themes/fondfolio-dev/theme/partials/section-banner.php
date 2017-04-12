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

echo '<section class="banner">';

  echo '<div class="row">';

    echo '<div class="column">';

      echo '<h1 class="">' . $title . '</h1>';

      echo '<p class="p-large">' . $description . '</p>';

      echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';

    echo '</div>';

   echo '</div>';

  if( $video ) :

    echo 'Put the video in the background';

  else :

    echo wp_get_attachment_image( $image, $size );

  endif;


echo '</section>';

?>
