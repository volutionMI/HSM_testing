<?php
/**
 * Template Name: mhm-cards
 *Template Post Type: post, page
 * @package WordPress
 * @subpackage Understrap
 * @since 
 */



get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="page-wrapper">
<!--<h1> <?php the_title(); ?>
       
        </h1> -->
        
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>
			
			<main class="site-main" id="main">


 <?php $query = new WP_Query( 'cat=55' ); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <div class="article col-lg-3 col-md-4 col-sm-12">
 <div class="mhm-card card">
	<a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

 <!-- Display the Title as a link to the Post's permalink. -->
 		<div class="card-header"><h2><?php the_title(); ?></h2></div>
		<?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
		<?php endif; ?>

 		 <div class="card-body"> 
  			<?php the_excerpt(); ?>  		</div>

 </div><!-- closes the first div box --></a></div>

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<!--?php get_sidebar( 'right' ); ?-->

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
