<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$divider_text = get_sub_field('divider_text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$button_micro = get_sub_field('button_micro');

echo '<section class="cta">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-10-laptop intro">';

      echo '<h2 class="">' . $title . '</h2>';

      if ($button_link && $button_text) :

      echo '<a href="' . $button_link .'" class="button button--primary button--large">' . $button_text . '</a>';

      endif;

      if ($button_micro) :

      echo '<p class="p--small">' . $button_micro . '</p>';

      endif;

      echo '<p class="divider">' . $divider_text . '</p>';

      if( have_rows('blocks') ):

        echo '<div class="row">';

          while ( have_rows('blocks') ) : the_row();
 
            echo '<div class="block__content block column column-4-tablet column-4-laptop">';

              $title = get_sub_field('title');
              $description = get_sub_field('description');

              echo '<h3>' . $title . '</h3>';

              echo '<p class="p--large">' . $description . '</p>';

            echo '</div>';

          endwhile;

        echo '</div>';

      endif;

    echo '</div>';

   echo '</div>';

echo '</section>';

?>
