<?php
/*
Template Name: Join
*/
?>
<?php get_header(); ?>

<div id="green_outer">
<div id="left">
  <div id="menu">
    <?php wp_nav_menu( array('menu' => 'Join' )); ?>
  </div>
</div>
<div id="center">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
  <div class="breadcrumbs">
    <?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
  </div>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<?php endwhile; else: ?>
<div class="post">
  <h2 class="center">Not Found</h2>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php get_search_form(); ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>
