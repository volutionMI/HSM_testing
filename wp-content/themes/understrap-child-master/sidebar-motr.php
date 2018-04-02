<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'motr' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="motr" role="mrb_custom">
	<?php else : ?>
<div class="col-md-3 widget-area" id="motr" role="mrb_custom">
	<?php endif; ?>
<?php dynamic_sidebar( 'motr-sidebar' ); ?>

</div><!-- #secondary -->
