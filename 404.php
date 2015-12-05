<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">               
                
                
                
                <div class="page-content">
					
					<?php dynamic_sidebar( 'error-page-widget' ); ?>
				
                </div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
        
          
	</div><!-- .content-area -->

<?php get_footer(); ?>
