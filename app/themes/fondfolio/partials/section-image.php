<?php

$description = get_sub_field('description');
$image = get_sub_field('image');
$orientation = get_sub_field('orientation');
$size = 'full';

echo '<section class="image">';

  echo '<div class="row">';

    if ($image) :

      echo '<figure class="gallery__image column column-6-laptop">';

        echo wp_get_attachment_image( $image, $size );

      echo '</figure>';

    endif;

      echo '<div class="column column-6-laptop">';

        echo '<h2>' . $description . '</h2>';

      echo '</div>';

    echo '</div>';

echo '</section>';
?>
