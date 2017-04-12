<?php

$item = get_query_var('item');

echo '<article class="faq">';

    echo '<div class="faq__question"><h3>' . get_the_title($item->ID) . '</h3></div>';

    echo '<div class="faq__answer">';

      the_content();

    echo '</div>';

echo '</artcle>';


?>
