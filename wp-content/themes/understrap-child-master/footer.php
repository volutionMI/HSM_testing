<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		    			<div class="row footer_menu">
				<?php get_sidebar( 'footerfull' ); ?>

			<div class="<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
				col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area" id="mrb">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->
    					</div>
    </div>

<div class="footer-bottom">
    <div class="container">
    	<div class="col-md-12 copyright">
    		<p>&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></p><span class="pull-right">&nbsp;</span>
        </div>

	</div><!-- container end -->
</div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function() {	
	$( ".widget h2" ).click(
		function() {
			$(this).parent().toggleClass('active');
		}
	);	  	
});
</script>
</body>

</html>

