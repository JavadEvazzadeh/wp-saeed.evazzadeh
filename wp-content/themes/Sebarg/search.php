<?php get_header(); ?>
<?php get_sidebar(); ?>
		<!-- Begin #CenterCol -->
		<div id="CenterCol">
	 
		<div id="archive-title">
		نتايج جستجو براي  '<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<strong>'); echo $key; _e('</strong>'); wp_reset_query(); ?>'
		</div>
						
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<!-- Begin .postBox -->
		<div class="postBox">
			<div class="postBoxMidInner first clearfix">
				<div class="date"><?php the_time('M') ?><br /><span class="day"><?php the_time('j') ?></span><br /><?php the_time('Y') ?></div>
				<div class="sidecommentshower"><?php comments_popup_link('بدون دیدگاه', '1 دیدگاه ', '% دیدگاه'); ?></div>
				<div class="sideCategoryshower">موضوع <?php the_category('، ') ?></div>
				<?php echo get_post_meta($post->ID, 'head',true); ?>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
				<div class="postThumb"><a href="<?php the_permalink() ?>" title="تصویر <?php the_title(); ?>" ><?php the_post_thumbnail(); ?></a></div>
				<div class="textPreview"><?php the_excerpt(); ?></div>
			</div>
		</div>
		
		<!-- End .postBox -->
		
		<?php endwhile; ?>

	<?php else : ?>
		<p>متاسفیم! آنچه به دنبالش بودید در اینجا نمی یابید!!</p>
	<?php endif; ?>
            <!--<div class="navigation">
						<div class="alignleft"><?php next_posts_link() ?></div>
						<div class="alignright"><?php previous_posts_link() ?></div>
			</div>-->
			<?php if (function_exists("emm_paginate")) {
				emm_paginate();
			} ?>
		</div>
		<!-- End #CenterCol -->
<?php get_footer(); ?>
