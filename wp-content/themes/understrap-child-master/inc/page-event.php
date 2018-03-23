<?php
/**
* Template Name: Event
*/
get_header(); ?>
<section id="page">
    <div class="container">
        <div id="content" class="site-content" role="main">
	    	<div class="row">
				<div class="col-xs-12 col-md-7 hoe">
	   				<?php $query = new WP_Query( 'cat=71' ); ?>
	 				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	 				<!-- Display the Title as a link to the Posts permalink. -->
	 					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					  		 <?php if ( has_post_thumbnail()) { ?>
		               
		                <?php } ?>

		                
		                    <div class="speak_meta hoe col-md-7">
<?php 

$fields = get_field_objects();

 if( $fields ): ?>
    <p>
    <?php foreach( $fields as $field ): ?>

        <?php if( $field['value'] ): ?>
            <strong><?php echo $field['label']; ?>: </strong><?php echo $field['value']; ?><br />
        <?php endif; ?>

    <?php endforeach; ?>
    </p>
<?php endif; ?>
        </div>       
		                
		            </article>
		            <div class="clearfix"></div>

					 <?php endwhile; 
					 wp_reset_postdata();
					 else : ?>
					 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					 <?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-4"><img class="aligncenter wp-image-3771 size-full" src="http://twowomenandahoe.com/wp-content/uploads/2015/03/container-4_cr.jpg" alt="fall container" width="360" height="640" />
				</div>
		</section>


<?php get_footer();