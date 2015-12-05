<?php
/**
 * Template Name: Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="ltpannel">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'nopic' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
?>
				</div>
        <div id="rtpannel">
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>
	<?php
                  endwhile;             
 ?> 
	</div>
    <div style="clear:both;">    </div>
    <?php dynamic_sidebar( 'product-widget' ); ?>

		</main><!-- .site-main -->
<!-- .content-area -->

<?php get_footer(); ?>
