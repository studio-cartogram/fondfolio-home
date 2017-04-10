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
       	$video = get_sub_field('video');

        if( get_row_layout() == 'banner' ):

        	echo '<h1>' . $title . '</h1>';
        	echo '<p class="large">' . $description . '</p>';
        	echo '<a href="' . $button_link .'" class="button large">' . $button_text . '</a>';
        	echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';

        elseif( get_row_layout() == 'stack' ): 

        	echo '<h2>' . $title . '</h2>';
        	echo '<p class="secondary">' . $subtitle . '</p>';

        elseif( get_row_layout() == 'gallery' ): 

        	echo '<h2>' . $title . '</h2>';
        	echo '<p class="secondary">' . $subtitle . '</p>';

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
