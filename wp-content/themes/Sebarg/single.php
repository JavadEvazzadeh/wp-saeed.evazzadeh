<?php get_header(); ?>
<?php get_sidebar(); ?>
	<!-- Begin #CenterCol -->
	<div id="CenterCol">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Begin .postBox -->
		<div class="postBox">
			<div class="postBoxMidInner first clearfix">
				<div class="date"><?php the_time('M') ?><br /><span class="day"><?php the_time('j') ?></span><br /><?php the_time('Y') ?></div>
				<div class="sidecommentshower"><?php comments_popup_link('بدون دیدگاه', '1 دیدگاه ', '% دیدگاه'); ?></div>
				<?php echo get_post_meta($post->ID, 'head',true); ?>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
				نوشته شده در <?php the_time('j F Y؛ ساعت g:i a') ?> توسط <?php the_author_link(); ?>
				<div class="category"><?php the_category('، ') ?></div>
					<br /><br />
					<?php the_content(); ?>
                    <div class="postTags"><?php the_tags(); ?></div>
					
			</div>
					<div class="postCredentials">
							
							<!-- Social Sharing Icons -->
							<div class="social">
							<strong>اين خبر براتون جالب بود؟ اون رو به اشتراک بذاريد!</strong><br />
									<a href="http://twitter.com/home/?status=<?php the_title(); ?>:<?php the_permalink(); ?>" title="Tweet this!">
									<img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Tweet this!" /></a>				
									<a href="http://digg.com/submit?phase=2&amp;amp;url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Digg this!">
									<img src="<?php bloginfo('template_directory'); ?>/images/digg.png" alt="Digg This!" /></a>				
									<a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Bookmark on Delicious.">
									<img src="<?php bloginfo('template_directory'); ?>/images/delicious.png" alt="Bookmark on Delicious" /></a>
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;amp;t=<?php the_title(); ?>" title="Share on Facebook.">
									<img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Share on Facebook" id="sharethis-last" /></a>
									
							</div>
							<!-- end Social Sharing Icons -->
							
							<!-- Related Posts-->
							<?php 
							$backup = $post;
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								$tag_ids = array();
								foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							
								$args=array(
									'tag__in' => $tag_ids,
									'post__not_in' => array($post->ID),
									'showposts'=>4, // Number of related posts that will be shown.
									'caller_get_posts'=>1
								);
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ) {
									echo '<h2>پست های مرتبط</h2><ul class="relatedPosts">';
									while ($my_query->have_posts()) {
										$my_query->the_post();
									?>
										<li><?php the_post_thumbnail(array(40,40)); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
									<?php
									}
									echo '</ul>';
								}
							}
							$post = $backup;
							wp_reset_query();
							 ?>
							<!-- end Related Posts-->
							<div id="authorDetails">
								<?php echo get_avatar( get_the_author_id() , 60 ); ?>
								<h4>درباره‌ی<a href="<?php the_author_url(); ?>">
								<?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a></h4>
								<p><?php the_author_description(); ?></p>
							</div>
					
		</div>
		<div class="postBoxMidInner"><?php comments_template(); ?></div>
		</div>
		<?php endwhile; else: ?>

		<p>متاسفانه مطلب مورد نظر شما در اینجا وجود ندارد!</p>

	<?php endif; ?>
	</div>
			</div>
		<!-- End #CenterCol -->
<?php get_footer(); ?>