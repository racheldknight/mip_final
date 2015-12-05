<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<!-- BEGIN PAGE PHP -->

<article id="post-<?php the_ID(); ?>" <?php post_class('solocont');?>>

	<div class="entry-content home-content">
		<div class="">
		<?php the_content(); ?>
		</div>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->



		<section class="homewidgets">
		<div id="ltpannel">
			<?php dynamic_sidebar( 'home-widget1' ); ?>
			<?php dynamic_sidebar( 'home-widget2' ); ?>
		</div>

		<div id="rtpannel">
			<?php dynamic_sidebar( 'home-widget3' ); ?>
			<?php dynamic_sidebar( 'home-widget4' ); ?>
		</div>
        </section>
        
<!-- END PAGE PHP -->

        </main><!-- .site-main -->
    </div><!-- .content-area -->
	
	
<?php get_footer(); ?>