<?php
/**
 * The sidebar containing the CF widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'cf' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="cf"  role="complementary">
	<?php else : ?>
<div class="col-md-3 widget-area" id="cf" role="complementary">
	<?php endif; ?>
<?php dynamic_sidebar( 'cf' ); ?>

</div><!-- #secondary -->
