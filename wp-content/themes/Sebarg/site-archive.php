<?php /* Template Name: SiteArchive */ ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="CenterCol">
 <!-- Begin .postBox -->
 <div class="postBox">
  <div class="postBoxMidInner ">
   <h1><?php wp_title(''); ?></h1>
    <blockquote>برای جستجو در اخبار <a href="<?php bloginfo('url'); ?>"><?php bloginfo('show'); ?></a> می‌توانید از آرشیو در نظر گرفته‌شده استفاده نمایید است. همچنین از دسته‌بندی‌ها نیز می توانید استفاده لازم را ببرید</blockquote>
    <h2>آرشیو ماهیانه به میلادی</h2>
    <ul><?php if (function_exists('wp_get_jarchives')) wp_get_jarchives('type=monthly&show_post_count=1'); else wp_get_archives('type=monthly&show_post_count=1'); ?></ul>
    <h2>تمام موضوعات اخبار</h2><ul><?php wp_list_cats('sort_column=name&optioncount=1') ?></ul>
    <br /><br /><br /><h2 class="en">This page created by <a href="http://www.evazzadeh.com">Javad Evazzadeh</a> (<a href="http://www.pixana.ir">Pixana Group</a>) for <a href="http://www.google.com">Google</a>!</h2>
  </div>
 </div>
 <!-- End .postBox -->
</div>
<?php get_footer(); ?>