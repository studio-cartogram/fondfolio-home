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

// check if the nested repeater field has rows of data
if( have_rows('blocks') ):

  echo '<ul class="' . $type . '">';

// loop through the rows of data
while ( have_rows('blocks') ) : the_row();

$title = get_sub_field('title');
$description = get_sub_field('description');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$icon = get_sub_field('icon');

echo '<li>';
echo '<span class="icon-' . $type . ' ' . $icon . '">icon-' . $icon . '</span>';
echo '<h3>' . $title. '</h3>';
echo '<p>' . $description. '</p>';
echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';
echo '</li>';

endwhile;

echo '</ul>';

endif;

?>
