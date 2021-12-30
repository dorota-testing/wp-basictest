<?php
/**
 * Basic Test Theme functions and definitions
 */

function btt_enqueue_scripts_and_styles() {

    wp_enqueue_style( 'template-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
		// Slick carousel styles
		wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/slick.css' ) );
		wp_enqueue_style( 'slick-theme-style', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/slick-theme.css' ) );

		// Navigation js
		wp_enqueue_script( 'btt-theme-navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', array(), filemtime( get_stylesheet_directory() . '/assets/js/navigation.js' ), true );
		
		// Enqueued javascript.
    wp_enqueue_script( 'btt-theme-global', get_stylesheet_directory_uri() . '/assets/js/template.js', array(), filemtime( get_stylesheet_directory() . '/assets/js/template.js' ), true );

		// Slick javascript.
		wp_enqueue_script( 'slick-carousel', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/slick.min.js' ), true );

}
add_action( 'wp_enqueue_scripts', 'btt_enqueue_scripts_and_styles' );

// Theme Support
function btt_theme_setup(){
		
	//post images
	add_theme_support( 'post-thumbnails' );	
	
  //Nav menus
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
    'footer-menu1' => __('Footer List of Links 1'),
    'footer-menu2' => __('Footer List of Links 2'),
    'footer-menu3' => __('Footer List of Links 3'),
  ));
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'widgets',
			) );
  
	// Gutenberg custom stylesheet
	add_theme_support('editor-styles');
	add_editor_style( 'style.css' ); // make sure path reflects where the file is located
}
add_action('after_setup_theme', 'btt_theme_setup');


// custom post type
function btt_custom_post_type() {
//set labels here
$labels = array(
	'name'                  => _x( 'Persons', 'Post type general name', 'btt_textdomain' ),
	'singular_name'         => _x( 'Person', 'Post type singular name', 'btt_textdomain' ),
	'menu_name'             => _x( 'Persons', 'Admin Menu text', 'btt_textdomain' ),
	'name_admin_bar'        => _x( 'Person', 'Add New on Toolbar', 'btt_textdomain' ),
	'add_new'               => __( 'Add New', 'btt_textdomain' ),
	'add_new_item'          => __( 'Add New Person', 'btt_textdomain' ),
	'new_item'              => __( 'New Person', 'btt_textdomain' ),
	'edit_item'             => __( 'Edit Person', 'btt_textdomain' ),
	'view_item'             => __( 'View Person', 'btt_textdomain' ),
	'all_items'             => __( 'All Persons', 'btt_textdomain' ),
	'search_items'          => __( 'Search Persons', 'btt_textdomain' ),
	'parent_item_colon'     => __( 'Parent Persons:', 'btt_textdomain' ),
	'not_found'             => __( 'No persons found.', 'btt_textdomain' ),
	'not_found_in_trash'    => __( 'No persons found in Trash.', 'btt_textdomain' ),
	'featured_image'        => _x( 'Person Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'btt_textdomain' ),
	'set_featured_image'    => _x( 'Set person image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'btt_textdomain' ),
	'remove_featured_image' => _x( 'Remove person image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'btt_textdomain' ),
	'use_featured_image'    => _x( 'Use as person image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'btt_textdomain' ),
	'archives'              => _x( 'Person archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'btt_textdomain' ),
	'insert_into_item'      => _x( 'Insert into person', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'btt_textdomain' ),
	'uploaded_to_this_item' => _x( 'Uploaded to this person', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'btt_textdomain' ),
	'filter_items_list'     => _x( 'Filter persons list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'btt_textdomain' ),
	'items_list_navigation' => _x( 'Persons list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'btt_textdomain' ),
	'items_list'            => _x( 'Persons list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'btt_textdomain' ),
);
$args = array(
	'labels'             => $labels,
	'public'             => true,
	'show_in_rest' 			 => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'persons' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'editor', 'thumbnail' ),
	'menu_icon'	  		 => 'dashicons-businesswoman'
);
	
	register_post_type( 'btt_person', $args );
}
add_action( 'init' , 'btt_custom_post_type'); 


// limit posts per page
/* function btt_limit_posts_per_archive_page( $query ) {
	if ( $query->is_post_type_archive( 'btt_person' ) && !is_admin()) {
	  $limit = 8;
	} else {
	  $limit = get_option('posts_per_page');
	}
	$query->set( 'posts_per_archive_page', $limit );
  }
add_action( 'pre_get_posts', 'btt_limit_posts_per_archive_page' ); */


if ( ! function_exists( 'basic_test_theme_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function basic_test_theme_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

function basic_test_theme_get_img_source ($img_id, $size='large') {
	$src = '';
	$arrImage = wp_get_attachment_image_src( $img_id, $size);
	if(isset($arrImage[0])){
		$src = $arrImage[0];
	}
	return $src;
}