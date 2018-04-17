<?php
/**
 * The right sidebar workshop listing.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'workshop' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="workshop" role="mrb_custom">
	<?php else : ?>
<div class="col-md-3 widget-area" id="workshop" role="mrb_custom">
	<?php endif; ?>
<?php dynamic_sidebar( 'workshop-sidebar' ); ?>

</div><!-- #secondary -->
