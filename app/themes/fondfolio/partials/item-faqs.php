<?php

$topics = wp_get_post_terms($post->ID, 'topic', array("fields" => "all"));
$item = get_query_var('item');

echo '<article id="' . $post->post_name . '" class="faq">';

    echo '<div class="faq__question">';

      echo '<h4>' . get_the_title($item->ID) . '</h4>';

      echo '<a href="#' . $post->post_name . '" class="faq__toggle">';

        set_query_var( 'icon', 'dropdown' );

        get_template_part('partials/icon');

      echo '</a>';

    echo '</div>';

    echo '<div class="format faq__answer">';

      the_content();

    echo '</div>';

    echo '<div class="faq__footer row">';

    if($topics) :

      echo '<ul class="list list--small list--sep-comma">';

      echo '<li>';

        echo '<strong>Filed under:</strong>';

      echo '</li>';

    foreach($topics as $topic) {


      echo '<li>';

        echo '<a href="' . get_term_link($topic) . '" class="link link--secondary">' . $topic->slug . '</a>';

      echo '</li>';

    }

    echo '</ul>';

    endif;

    echo '</div>';

echo '</article>';

?>
