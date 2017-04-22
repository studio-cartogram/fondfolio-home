<?php

$topics = wp_get_post_terms($post->ID, 'topic', array("fields" => "all"));
$item = get_query_var('item');
$context = get_query_var('context');

echo '<article id="' . $post->post_name . '" class="faq faq--' . $context . ' with-paper">';

    echo '<div class="faq__question">';

      echo '<h2><a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></h2>';

    echo '</div>';

    echo '<div class="format faq__answer">';

      the_content();

    echo '</div>';

    echo '<div class="faq__footer row">';

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

    echo '</div>';

echo '</article>';

?>