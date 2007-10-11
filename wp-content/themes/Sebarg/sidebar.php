<!-- Begin #LeftSide -->
	<div id="LeftSidecol">
		<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
		<div class="SideSearchBox">
			<div class="SearchBox">
				<input type="text" id="s" name="s" value="کلمه مورد نظر را اينجا وارد کنيد" onfocus="this.value=''" />
				<input type="submit" value="" class="submit" id="searchsubmit"/>
			</div>	
		</div>
	</form>
		<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?><?php endif; ?>
	</div>
<!-- End #LeftSide -->

<!-- Begin #SidecolRight -->
    <!-- Begin Top Slider -->
	 <?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
    <!-- End Top Slider -->
    <div id="RightSidecol">

    <?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?><?php endif; ?>
    </div>
<!-- End #SidecolRight -->