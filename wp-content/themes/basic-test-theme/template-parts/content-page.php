<?php
/**
 * Template part for displaying page content in index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basic_test_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_front_page() ) :
		// front page only;
		the_content();

	
	else:
		// pages that are not the home page	

	the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	<?php basic_test_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'basic_test_theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php 	endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
