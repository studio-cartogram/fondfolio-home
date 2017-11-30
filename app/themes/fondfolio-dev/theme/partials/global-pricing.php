<?php

// Global override

$note = get_field('pricing_note', 'options');

echo '<section class="cta">';

echo '<div class="cta-global-pricing">';

if( have_rows('pricing_option', 'options') ):
    
    while ( have_rows('pricing_option', 'options') ) : the_row();

      $icon = get_sub_field('icon');
      $heading = get_sub_field('heading');
      $price = get_sub_field('price');
      $description = get_sub_field('description');
      $button_text = get_sub_field('button_text');
      $button_link = get_sub_field('button_link');

        echo '<div class="option">';
        
        if ($icon) :
        
          set_query_var( 'icon', ''. $icon .'' );
          get_template_part('partials/icon');

        endif;

        echo '<h2 class="text--inverted option--heading">' . $heading . '</h2>';

        if ($price) :

        echo '<h2 class="text--inverted price"><span class="currency">$</span>' . $price . '</h2>';

        endif;

        if ($description) :
          
          echo '<p class="text--inverted">' . $description . '</p>';
          
        endif;

        if ($button_link && $button_text) :

          echo '<div class="cta__button">';

            echo '<a href="' . $button_link .'" class="button button--primary button--inverted button--large">' . $button_text . '</a>';

          echo '</div>';

        endif;

      echo '</div>';

    endwhile;
  
endif;

echo '</div>';

if ($note) :

echo '<div class="row row--justify-center">';
  
  echo '<p class="p--small text--inverted pricing-note">' . $note . '</p>';

echo '</div>';
  
endif;

echo '</section>';
?>