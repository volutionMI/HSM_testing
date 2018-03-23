<?php
	/**
    * WP Post Template: single-speaker
    */

get_header();
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-8';
$cat=(71);
}
?>

<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php /* The loop */ ?>
        <?php if(have_posts()){ while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content-speaking', get_post_format() ); ?>
       
        <?php blog_comments(); ?>
<?php comments_template(); ?>
        <?php zee_post_nav(); ?> <?php } } ?>
    </div><!--/#content -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer();