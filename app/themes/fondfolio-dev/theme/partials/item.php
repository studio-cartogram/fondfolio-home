<?php

$isBlog = is_post_type('post');
$isFaq = is_post_type('faqs');
$itemType = $isFaq ? 'with paper faq faq---' : 'blogpost blogpost---';
$item = get_query_var('item');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));
$categories = wp_get_post_terms($item->ID, 'category', array("fields" => "all"));
$context = get_query_var('context');

echo '<article id="' . $item->post_name . '" class="' . $itemType .'' . $context . '">';

    echo '<div class="faq__question">';

      echo '<h2><a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></h2>';

    echo '</div>';

    echo '<div class="format faq__answer">';

    if ($context === 'single') {
      the_content();
    } else {

      the_excerpt();

      if (has_excerpt($item->ID)) {

      echo '<div class="faq__more">';

        more_link('View Full Answer');

      echo '</div>';

      }

    }

    echo '</div>';

    if ($isBlog) :

      if ($context === 'single') :

      echo '<div class="author-bio">';

        echo '<div class="author-avatar">';

          echo get_avatar( get_the_author_meta( 'ID' ), 60 );

        echo '</div>';
        echo '<div class="author-details">';
          echo '<p class="serif">' . get_the_author_meta('first_name') .'&nbsp;'. get_the_author_meta('last_name') .'<br>';
          echo '<em class="serif description">' . get_the_author_meta('description') .'</em></p>';
        echo '</div>';

      echo '</div>';

    endif;

    endif;

    echo '<div class="faq__footer row">';

    // tpoics if it's an FAQ

    if($topics) :

      echo '<ul class="list list--small list--sep-comma">';

      echo '<li>';

        echo '<em class="serif">filed under &mdash;</em> ';

      echo '</li>';

    foreach($topics as $topic) :

      echo '<li>';

        echo '<a href="' . get_term_link($topic) . '" class="link link--secondary">' . $topic->slug . '</a>';

      echo '</li>';

    endforeach;

    echo '</ul>';

    endif;

    // categories if it's a blog post

    if($categories) :

      echo '<ul class="list list--small list--sep-comma">';

      echo '<li>';

        echo '<em class="serif">filed under &mdash;</em> ';

      echo '</li>';

    foreach($categories as $category) :

      echo '<li>';

        echo '<a href="' . get_term_link($category) . '" class="link link--secondary">' . $category->slug . '</a>';

      echo '</li>';

    endforeach;

    echo '</ul>';

    endif;

    echo '</div>';

echo '</article>';

?>
