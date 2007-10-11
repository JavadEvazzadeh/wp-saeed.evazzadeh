<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- begin CenterCol -->
	<div id="CenterCol">
    <!-- Begin .postBox -->
		<div class="postBox">
				<div class="postBoxMidInner first clearfix">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?><p><?php _e('متاسفانه نوشته اي با اين مشخصات پيدا نشد!'); ?></p>
				<?php endif; ?>
			</div>
        </div>
	 <!-- End .postBox -->
	</div>
	<!-- end CenterCol -->
<?php get_footer(); ?>