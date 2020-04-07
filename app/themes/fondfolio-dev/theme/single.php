<?php

$isBlog = is_post_type('post');
$isFaq = is_post_type_archive('faqs');

get_template_part('partials/head');

get_template_part('partials/analytics');

get_header();

echo '<main id="main" role="main" class="main">';

echo '<div id="barba-wrapper">';

  echo '<div class="barba-container" data-namespace="single">';

  while ( have_posts() ) : the_post();

    echo '<div class="row row--justify-center">';
      

      if ($isBlog) :

        echo '<div class="column column-10-tablet column-8-laptop">';

      else : echo '<div class="column column-10-tablet column-7-laptop">';

      endif;
      

      set_query_var( 'context', 'single' );
      set_query_var( 'item', $post );
      get_template_part('partials/item');
      get_template_part('partials/prevnext');

      echo '</div>';

    echo '</div>';

  endwhile;

  echo '</div>';

echo '</div>';

echo '</main>';

get_footer();

get_template_part('partials/foot');

?>
