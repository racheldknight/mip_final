<?php /* Template Name: Contact */ 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>


		<div id="ltpannel">
			<?php
			// Include the page content template.
            //Content page is pulling in featured image through 		twentyfifteen_post_thumbnail(); needs restyling 
			get_template_part( 'content', 'nopic' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
        </div>
        <div id="rtpannel">
        <?php dynamic_sidebar( 'contact-widget1' ); ?>
       <!-- <?php dynamic_sidebar( 'contact-widget2' ); ?> -->

		<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
		?>
        </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
