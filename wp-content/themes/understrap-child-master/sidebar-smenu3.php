<?php
/**
 * Sidebar setup for smenu3.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'sidebar-6' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
