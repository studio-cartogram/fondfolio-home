<?php

$text = get_sub_field('text');
$section = 'note';

echo '<section class="' . $section . '">';

  echo '<div class="banner__background">';

    echo '<p class="p--small">' . $text . '</p>';

  echo '</div>';

echo '</section>';

?>
