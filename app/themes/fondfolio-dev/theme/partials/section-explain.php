<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$type = get_sub_field('type');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');

echo '<section class="explain">';

  echo '<div class="row">';

    echo '<div class="column intro">';

      echo '<h2>' . $title . '</h2>';

      echo '<p class="secondary">' . $subtitle . '</p>';

    echo '</div>';

  echo '</div>';

  if( have_rows('blocks') ):

    echo '<div class="row">';

      while ( have_rows('blocks') ) : the_row();

        echo '<div class="block__content">';

          $title = get_sub_field('title');
          $description = get_sub_field('description');

          get_template_part('partials/block-icon');

          echo '<h3>' . $title. '</h3>';

          echo $description;

        echo '</div>';

      endwhile;

    echo '</div>';

  endif;

  if( have_rows('badges') ):

    echo '<div class="row">';

      while ( have_rows('badges') ) : the_row();

        echo '<div class="badge__content">';

          $title = get_sub_field('title');

          get_template_part('partials/icon');

          echo '<h3>' . $title . '</h3>';

        echo '</div>';

      endwhile;

    echo '</div>';

  endif;

  if ($button_link && $button_text) :

    echo '<p><a href="' . $button_link .'" class="link link--primary">' . $button_text . '</a></p>';

  endif;


echo '</section>';

?>
