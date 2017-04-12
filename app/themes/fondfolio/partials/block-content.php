<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');

echo '<div class="block__content">';

  echo '<h3>' . $title. '</h3>';

  echo $description;

  if ($button_link && $button_text) :

    echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';

  endif;

echo '</div>';

?>
