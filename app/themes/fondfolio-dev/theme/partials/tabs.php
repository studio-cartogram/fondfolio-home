<?php
$args = array( 'hide_empty=0' );

$terms = get_terms( 'topic', $args );

  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

    echo '<nav class="tabs">';

    echo '<div class="tabs__inner">';


      foreach ( $terms as $term ) {

        echo '<a class="tab" href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all faqs filed under %s', 'fondfolio' ), $term->name ) ) . '">' . $term->name . '</a>';

      }


    echo '</div>';

    echo '</nav>';

  }

?>
