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

echo '<section class="stack">';

  echo '<div class="row">';

    echo '<div class="column stack__mast">';

      echo '<h2>' . $title . '</h2>';

      echo '<p class="secondary">' . $subtitle . '</p>';

    echo '</div>';

   echo '</div>';

    echo '<div class="row">';

      if( have_rows('blocks') ):

        echo '<div class="column column-6-tablet ' . $type . '">';

        while ( have_rows('blocks') ) : the_row();

        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
        $icon = get_sub_field('icon');


        set_query_var( 'icon', $icon );

        get_template_part('partials/icon');

        echo '<h3>' . $title. '</h3>';
        echo '<p>' . $description. '</p>';
        echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';

      endwhile;

      echo '</div>';

      endif;

   echo '</div>';

echo '</section>';

?>
