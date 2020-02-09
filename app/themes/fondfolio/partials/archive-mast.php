<?php

$isHelpPage = is_post_type_archive('faqs');
$title = $isHelpPage ? 'How can we help?' : 'Blog';

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="">' . (get_search_query() ? 'Search Results for &ldquo;' . get_search_query() . '&rdquo;' : $title) . '</h1>';

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
