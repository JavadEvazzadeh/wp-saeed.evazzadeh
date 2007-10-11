<?php /* Template Name: Tags */ ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="CenterCol">
 <!-- Begin .postBox -->
 <div class="postBox">
  <div class="postBoxMidInner ">
   <h1><?php wp_title(''); ?></h1>
    <blockquote>این صفحه تنها برای جذب موتورهای جستجو به سمت <a href="<?php bloginfo('url'); ?>"><?php bloginfo('show'); ?></a> در نظر گرفته شده است، هرچند شما بازدیدکننده گرامی نیز می توانید با استفاده از کلیدواژه مناسب به محتوای مورد نیاز خود برسید</blockquote>
    <?php wp_tag_cloud('number=0'); ?>
    <br /><br /><br /><h2 class="en">This page created by <a href="http://www.evazzadeh.com">Javad Evazzadeh</a> (<a href="http://www.pixana.ir">Pixana Group</a>) for <a href="http://www.google.com">Google</a>!</h2>
  </div>
 </div>
 <!-- End .postBox -->
</div>
<?php get_footer(); ?>