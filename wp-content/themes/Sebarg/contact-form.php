<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- Begin #CenterCol -->
<div id="CenterCol">
 <!-- Begin .postBox -->
 <div class="postBox">
  <div class="postBoxMidInner clearfix">
   <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
   <?php the_content(); ?>
  </div>
 </div>
<!-- End .postBox -->
</div>
<!-- End #CenterCol -->
<?php get_footer(); ?>