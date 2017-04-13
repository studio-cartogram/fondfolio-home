<?php

	/* ========================================================================================================================

	Actions

	======================================================================================================================== */

	/**
	 * Front End Assets
	 **/
  add_action('wp_head','cartogram_fonts');
  add_action( 'wp_enqueue_scripts', 'cartogram_styles' );
  add_action( 'wp_enqueue_scripts', 'cartogram_scripts' );

	/**
	 * Post types and taxonomies
	 **/
	add_action('init', 'create_post_types' );
	add_action('init', 'create_taxonomies' );

	/* ========================================================================================================================

	Cartogram Post Types and Taxonomies Functions v.1.0

	======================================================================================================================== */

  if ( ! function_exists( 'create_post_types' ) ) {

    function create_post_types() {

      $faqs_args = array(
        'public'              => true,
        'label'               => 'FAQs',
        'supports'            => array( 'title', 'editor')
      );

      register_post_type( 'faqs', $faqs_args );

      flush_rewrite_rules( false );

    }

  }


  if ( ! function_exists( 'create_taxonimies' ) ) {

    function create_taxonomies() {

      $labels = array(
        'name'                       => _x( 'Topic', 'taxonomy general name' ),
        'singular_name'              => _x( 'Topic', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Topics' ),
        'popular_items'              => __( 'Popular Topics' ),
        'all_items'                  => __( 'All Topics' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Topic' ),
        'update_item'                => __( 'Update Topic' ),
        'add_new_item'               => __( 'Add New Topic' ),
        'new_item_name'              => __( 'New Topic Name' ),
        'separate_items_with_commas' => __( 'Separate Topic with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Topic' ),
        'choose_from_most_used'      => __( 'Choose from the most used Topic' ),
        'not_found'                  => __( 'No Topics found.' ),
        'menu_name'                  => __( 'Topics' ),
      );

      $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
      );

      register_taxonomy( 'topic', array('faqs'), $args );

      flush_rewrite_rules( false );

    }

  }

	/* ========================================================================================================================

	Cartogram Custom Field Functions

	======================================================================================================================== */

  if( function_exists('acf_add_options_page') ) {

        acf_add_options_page('Footer');
        acf_add_options_page('Homepage');

  }

	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

  if ( ! function_exists( 'cartogram_scripts' ) ) {

    function cartogram_scripts() {

      $theme_dir = get_stylesheet_directory_uri();

      wp_enqueue_script( 'main', "$theme_dir/assets/js/main.js", array(), null, true );

    }

  }

	/* ========================================================================================================================

	Styles

  ======================================================================================================================== */

  if ( ! function_exists( 'cartogram_styles' ) ) {

    function cartogram_styles() {
      $theme_dir = get_stylesheet_directory_uri();

      wp_enqueue_style( 'main', "$theme_dir/assets/css/main.css", array(), null, 'all' );
    }
  }

	/* ========================================================================================================================

	Theme Setup

	======================================================================================================================== */


      /* ========================================================================================================================

      HTML

      ======================================================================================================================== */

      add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
      ) );

      /* ========================================================================================================================

      Images

      - Set thumbnail sizes and add any additional featured images.

      ======================================================================================================================== */

      add_theme_support('post-thumbnails');
      add_image_size('img_thumbnail',500, 500, true);
      add_image_size('img_medium',800, 800, false);
      add_image_size('img_large',1200, 800, true);

      /* ========================================================================================================================

      Navigation Menus

      ======================================================================================================================== */

      register_nav_menus( array(
        'nav_primary'	=>  'Primary Nav',
        'nav_footer'	=>  'Footer Nav',
      ) );


  /* ========================================================================================================================

  Add Font Embed Script

  ======================================================================================================================== */

	function cartogram_fonts() {

    $output = '<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|Lora:400,400i,700,700i" rel="stylesheet" />';
		echo $output;

  }



  /* ========================================================================================================================

  Extra

  ======================================================================================================================== */

  function getVimeoThumb($id, $size) {

    $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
    $key = 'thumbnail_' . $size;

    return $vimeo[0][$key];
  }

?>
