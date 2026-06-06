<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>



	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

		<aside class="widget">
			<?php do_action('wp_translate_code_place'); ?>
		</aside>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<aside id="text-tntu-logo" class="widget widget_text">			<div class="textwidget"><p style="text-align: center"><a href="http://tntu.edu.ua" target="_blank"><img class="aligncenter wp-image-818 size-medium" src="http://av.tntu.edu.ua/wp-content/uploads/sites/34/2014/09/Емблема-ТНТУ.png" alt="Емблема ТНТУ" width="75" height="63">© Тернопільський<br>національний<br>технічний університет<br>ім. Івана Пулюя</a></p></div>
				</aside>

	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
