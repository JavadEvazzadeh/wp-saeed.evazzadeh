<?php get_header(); ?>
<?php get_sidebar(); ?>
		<!-- Begin #CenterCol -->
		<div id="CenterCol">
		<!-- archive-title -->				
						<?php if(is_month()) { ?>
						<div id="archive-title">
						جستجوي آرشيو از '<strong><?php the_time('F, Y') ?></strong>'
						</div>
						<?php } ?>
						<?php if(is_category()) { ?>
						<div id="archive-title">
						جستجوي آرشيو '<strong><?php $current_category = single_cat_title("", true); ?></strong>'
						</div>
						<?php } ?>
						<?php if(is_tag()) { ?>
						<div id="archive-title">
						جستجوي آرشيو تگ شده به '<strong><?php wp_title('',true,''); ?></strong>'
						</div>
						<?php } ?>
						<?php if(is_author()) { ?>
						<div id="archive-title">
						جستجوي آرشيو '<strong><?php wp_title('',true,''); ?></strong>'
						</div>
						<?php } ?>
					<!-- /archive-title -->

		<?php query_posts($query_string . '&cat=-31,-32,-33,-34'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Begin .postBox -->
		<div class="postBox">
				<div class="postBoxMidInner first clearfix">
				<div class="sidecommentshower"><?php comments_popup_link('بدون دیدگاه', '1 دیدگاه ', '% دیدگاه'); ?></div>
				<div class="sideCategoryshower">موضوع <?php the_category('، ') ?></div>
				<?php echo get_post_meta($post->ID, 'head',true); ?>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
				<div class="postThumb"><a href="<?php the_permalink() ?>" title="تصویر <?php the_title(); ?>" >
				<?php if(has_post_thumbnail()) the_post_thumbnail(); else{ echo"<img width='92' height='92' src='"; bloginfo('template_directory'); echo"/images/post_thumb.jpg' alt='"; the_title(); echo"' title='"; the_title(); echo"' />"; } ?></a></div>
				<div class="textPreview"><?php the_excerpt(); ?></div>
				<div class="date"><?php the_time('M') ?><br /><span class="day"><?php the_time('j') ?></span><br /><?php the_time('Y') ?></div>
				</div>
		</div>
		<!-- End .postBox -->
		
		<?php endwhile; ?>
	<?php else : ?><p>متاسفانه مطلب مورد نظر شما در اینجا وجود ندارد!</p><?php endif; ?>
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