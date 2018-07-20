<?php

echo '<section class="cta pricing">';

  echo '<div class="row row--justify-center">';

    if( have_rows('options') ):

    while ( have_rows('options') ) : the_row();

    $icon = get_sub_field('icon');
    $heading = get_sub_field('heading');
    $price = get_sub_field('price');
    $description = get_sub_field('description');
    $button_text = get_sub_field('button_text');
    $button_link = get_sub_field('button_link');

      echo '<div class="column intro">';

        if ($icon) :
        
          set_query_var( 'icon', ''. $icon .'' );
          get_template_part('partials/icon');

        endif;

        echo '<h2 class="text--inverted">' . $heading . '</h2>';

        if ($button_link && $button_text) :

          echo '<div class="cta__button">';

            echo '<a onclick="return gtag_report_conversion("https://my.fondfolio.com/auth/signup");" href="' . $button_link .'" class="button button--primary button--inverted button--large adwordsTracking">' . $button_text . '</a>';

          echo '</div>';

        endif;

        if ($description) :

          echo '<p class="p--small text--inverted">' . $description . '</p>';

        endif;

      echo '</div>';

    endwhile;

    endif;

  echo '</div>';

echo '</section>';


?>
