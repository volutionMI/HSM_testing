<?php
/**
 * The template for displaying posts in the Event post format
 *
 * @package WordPress
 * @subpackage Understrap
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        

        <?php if ( is_single() ) { ?>
        <h1 class="entry-title">Speaking Event: <span><?php the_title(); ?></span></h1>
            <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
        </h1> 

        <?php } else { ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><h2 class="entry-title">Speaking Event: <span><?php the_title(); ?></span></h2></a>
            <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
            <sup class="featured-post"><?php _e( 'Sticky', ZEETEXTDOMAIN ) ?></sup>
            <?php } ?>
            <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
        </h2>
        <?php } //.entry-title ?>
            <div class="entry-meta">
          <ul>  
               <li class="category"><?php echo __('In', ZEETEXTDOMAIN ); ?> <?php echo get_the_category_list(', '); ?></li> 
                <?php if ( comments_open() && ! is_single() ) { ?>
                <li class="comments-link">
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', ZEETEXTDOMAIN ) . '</span>', __( 'One comment so far', ZEETEXTDOMAIN ), __( 'View all % comments', ZEETEXTDOMAIN ) ); ?>
                </li>
                <?php } //.comment-link ?>                       
            </ul>
        </div>
        <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
        <!--div class="entry-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div-->
        <?php } //.entry-thumbnail ?>
    </header><!--/.entry-header -->

    <?php if ( is_search() ) { ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <?php } else { ?>
    <div class="entry-content">
        <div class="speak_meta">
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
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', ZEETEXTDOMAIN ) ); ?>
    </div>
    <?php } //.entry-content ?>
<?php if ( is_single() ) { ?>
    <footer>
   <?php zee_link_pages(); ?>
    </footer>
<?php } else { ?>
     <footer>
       <a href="http://twowomenandahoe.com/wp-content/uploads/2016/01/Blog-signature1.png"><img class=" size-medium wp-image-4509 aligncenter" src="http://twowomenandahoe.com/wp-content/uploads/2016/01/Blog-signature1-300x88.png" alt="Blog signature" width="300" height="88" /></a>       
    </footer>
    <?php } ?>
</article><!--/#post-->