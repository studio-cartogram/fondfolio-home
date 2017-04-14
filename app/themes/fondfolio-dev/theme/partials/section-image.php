<?php

$description = get_sub_field('description');
$image = get_sub_field('image');
$size = 'full';

echo '<section class="image">';

  echo '<div class="row">';

    echo '<div class="column intro">';

    if ($image) :

      echo '<figure class="gallery__image">';

        echo wp_get_attachment_image( $image, $size );

      echo '</figure>';

    endif;

      echo '<h2>' . $description . '</h2>';

    echo '</div>';

  echo '</div>';

echo '</section>';
?>
