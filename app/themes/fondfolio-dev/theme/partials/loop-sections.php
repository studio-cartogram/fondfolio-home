<?php

$context = get_query_var( 'context' );
$modifications = array();
$post_type = $context;
$modifications['post_type'] = array($post_type);

$args = array_merge(
  // $wp_query->query_vars,
  $modifications 
);

$the_query = new WP_Query($args);

// check if the flexible content field has rows of data
if( have_rows('sections', 'options') ):

     // loop through the rows of data
    while ( have_rows('sections', 'options') ) : the_row();
		
		$title = get_sub_field('title');
       	$description = get_sub_field('description');
       	$subtitle = get_sub_field('subtitle');
       	$button_text = get_sub_field('button_text');
       	$button_link = get_sub_field('button_link');
       	$image = get_sub_field('image');
       	$size = 'full'; // (thumbnail, medium, large, full or custom size)
       	$video = get_sub_field('video');
       	$type = get_sub_field('type');

        if( get_row_layout() == 'banner' ):

        	echo '<h1>' . $title . '</h1>';
        	echo '<p class="large">' . $description . '</p>';
        	echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';

        	if( $video ) :

				echo 'Put the video in the background';

			else :

				echo wp_get_attachment_image( $image, $size );

			endif;


        elseif( get_row_layout() == 'stack' ): 

        	echo '<h2>' . $title . '</h2>';
        	echo '<p class="secondary">' . $subtitle . '</p>';

        	// check if the nested repeater field has rows of data
        	if( have_rows('blocks') ):

			 	echo '<ul class="' . $type . '">';

			 	// loop through the rows of data
			    while ( have_rows('blocks') ) : the_row();

					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$button_text = get_sub_field('button_text');
       				$button_link = get_sub_field('button_link');
       				$icon = get_sub_field('icon');

					echo '<li>';
						echo '<span class="icon-' . $type . ' ' . $icon . '">icon-' . $icon . '</span>';
						echo '<h3>' . $title. '</h3>';
						echo '<p>' . $description. '</p>';
						echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';
					echo '</li>';

				endwhile;

				echo '</ul>';

			endif;

        elseif( get_row_layout() == 'gallery' ): 

        	echo '<h2>' . $title . '</h2>';
        	echo '<p class="secondary">' . $subtitle . '</p>';

        		// check if the nested repeater field has rows of data
        	if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');
					$size = 'medium'; // (thumbnail, medium, large, full or custom size)

					echo '<li>';

						echo wp_get_attachment_image( $image, $size );

					echo '</li>';

				endwhile;

				echo '</ul>';

			endif;

			echo '<p class="secondary">' . $description . '</p>';

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
