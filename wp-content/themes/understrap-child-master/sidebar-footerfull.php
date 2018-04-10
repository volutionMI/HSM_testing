<?php
/**
 * Sidebar setup for footerfull.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row text-flow-columns">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
