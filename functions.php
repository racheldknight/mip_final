<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'childtheme_js' );
function childtheme_js() {
    wp_enqueue_script( 'childjs', get_template_directory_uri() . '-child/js/main.js', array( 'jquery' ) );
}


function blank_widgets_init() {

    /*--- Home Widget 1 --- */
    register_sidebar( array(
        'name' => ('Home Widget 1'),
        'id' => 'home-widget1',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home1">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 2 --- */
    register_sidebar( array(
        'name' => ('Home Widget 2'),
        'id' => 'home-widget2',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home2">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 3 --- */
    register_sidebar( array(
        'name' => ('Home Widget 3'),
        'id' => 'home-widget3',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home3">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 4 --- */
    register_sidebar( array(
        'name' => ('Home Widget 4'),
        'id' => 'home-widget4',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

    /*--- Contact Form Widget1 --- */
    register_sidebar( array(
        'name' => ('Contact Form Widget 1'),
        'id' => 'contact-widget1',
        'description' => 'First widget for our contact', 
        'before_widget' => '<div class="widget-contact1">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
 
    /*--- Contact Form Widget2 --- */
    register_sidebar( array(
        'name' => ('Contact Form Widget 2'),
        'id' => 'contact-widget2',
        'description' => 'First widget for our contact', 
        'before_widget' => '<div class="widget-contact2">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
        
    /*--- Distribution Form Widget --- */
    register_sidebar( array(
        'name' => ('Distribution Form Widget'),
        'id' => 'distribution-widget',
        'description' => 'First widget for our distribution', 
        'before_widget' => '<div class="widget-distribution">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

       

      /*--- Testimonial Widget --- */
    register_sidebar( array(
        'name' => ('Testimonial Widget'),
        'id' => 'testimonial-widget',
        'description' => 'First widget for our testimonial', 
        'before_widget' => '<div class="widget-testimonial">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
		
		
      /*--- Product Widget --- */
    register_sidebar( array(
        'name' => ('Product Widget'),
        'id' => 'product-widget',
        'description' => 'First widget for our products', 
        'before_widget' => '<div class="widget-product">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
		
		
		/*--- 404 Widget --- */
    register_sidebar( array(
        'name' => ('Error Page Widget'),
        'id' => 'error-page-widget',
        'description' => 'Widget for error page', 
        'before_widget' => '<div class="widget-error-page">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
		
		
		

}        
        

add_action('widgets_init', 'blank_widgets_init');

?>