<?php



function tntu_translate_widget_header(){
	echo '<meta name="google-translate-customization" content="2f76bc2fb4e6546d-5cad4e8956308f42-g401cb5c1be7de8cd-11"></meta>';
}

function tntu_translate_widget_inplace(){
?>
	<div id="google_translate_element"></div><script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'uk', includedLanguages: 'de,en,es,fr,it,pl,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	  }
	  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	          
<?php
}

add_action('wp_translate_code_place', 'tntu_translate_widget_inplace');
add_action('wp_head', 'tntu_translate_widget_header');

/********************************/


#if ( ! function_exists( 'twentyfourteen_post_nav' ) ) :

/**
 * Display navigation to next/previous post when applicable.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );
        if ( ! $next && ! $previous ) {
                return;
        }

        ?>
        <nav class="navigation post-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentyfourteen' ); ?></h1>
                <div class="nav-links">
                        <?php
                        if ( is_attachment() ) :
                                previous_post_link( '%link', __( '<span class="meta-nav">Published In</span>%title', 'twentyfourteen' ) );
                        else :
                                previous_post_link( '%link', __( '<span class="meta-nav">Previous Post</span>%title', 'twentyfourteen' ), true );
                                next_post_link( '%link', __( '<span class="meta-nav">Next Post</span>%title', 'twentyfourteen' ), true );
                        endif;
                        ?>
                </div><!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
}

#endif;

// allow script & iframe tag within posts
function allow_post_tags( $allowedposttags ){
    $allowedposttags['script'] = array(
        'type' => true,
        'src' => true,
        'height' => true,
        'width' => true,
	'async' => true,
    );
    $allowedposttags['iframe'] = array(
        'src' => true,
        'width' => true,
        'height' => true,
        'class' => true,
        'frameborder' => true,
        'webkitAllowFullScreen' => true,
        'mozallowfullscreen' => true,
        'allowFullScreen' => true
    );
    return $allowedposttags;
}
add_filter('wp_kses_allowed_html','allow_post_tags', 1);

