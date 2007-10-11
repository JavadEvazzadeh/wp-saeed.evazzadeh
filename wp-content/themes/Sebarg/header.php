<!DOCTYPE html>
<!--[if lte IE 6]><script>document.location = '<?php bloginfo('template_directory'); ?>/oldbrowser.html';</script><![endif]-->
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php if (wp_title('')) wp_title(''); else bloginfo( 'name' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<meta name="keywords" content="<?php echo get_option('Sebarg_keywords'); ?>" />
<link type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" rel="shortcut icon" />
<?php wp_head(); ?>
</head>
<body >
 <!-- Begin #wrapper -->
  <div id="wrapper">
  <!-- Begin header -->
   <div id="header">
    <div id="logo"><a Title="<?php echo get_option('Sebarg_logo_alt'); ?>" href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('Sebarg_logo_img'); ?>" alt="<?php echo get_option('Sebarg_logo_alt'); ?>" /></a><span> <?php echo get_settings('blogdescription');?></span></div>
    <!-- Begin #topMenu -->
    <?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_id' => 'topMenu', 'container_class' => 'ddsmoothmenu', 'fallback_cb'=>'primarymenu') );
				}else{primarymenu();}?>
		<!-- End #topMenu -->
		<!-- Begin #topMenuRight -->
			<div id="topMenuRight">
			<?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'secondary-menu','fallback_cb'=>'secondarymenu') );
				}else{secondarymenu();}?>
			</div>
		<!-- End #topMenuRight -->
		<!-- Begin #socialLinks -->
			<div id="socialLinks">
				<?php if(get_option('Sebarg_linkedin_link')!=""){ ?>
				<a href="<?php echo get_option('Sebarg_linkedin_link'); ?>" class="linkedin" title="Join us on LinkedIn!">Join us on LinkedIn!</a>
				<?php }?>
				<?php if(get_option('Sebarg_facebook_link')!=""){ ?>
				<a href="<?php echo get_option('Sebarg_facebook_link'); ?>" class="facebook" title="Join us on Facebook!">Join us on Facebbook!</a>
				<?php }?>
				 <?php if(get_option('Sebarg_twitter_user')!=""){ ?>
				<a href="http://twitter.com/<?php echo get_option('Sebarg_twitter_user'); ?>" class="twitter" title="Follow Us on Twitter!">Follow Us on Twitter!</a>
				<?php }?>
				<a href="<?php bloginfo('rss2_url'); ?>" title="RSS" class="rss">Subscribe to our RSS Feed!</a>
			</div>
		<!-- End #socialLinks -->
	</div>
	<!-- End #header -->
	
	<!-- Begin #content -->
	<div id="content" class="clearfix">