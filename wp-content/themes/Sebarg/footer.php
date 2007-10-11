   </div>
   <!-- end content -->
  </div>
  <!-- end wrapper --> 
  <a id="nav-admin" href="<?php bloginfo('url'); if(is_user_logged_in()) echo "/wp-admin"; else echo"/wp-login.php"; ?>" target="_blank" title="برای ورود به بخش مدیریت کلیک کنید"><img src="<?php bloginfo('template_directory'); echo"/images/"; if(is_user_logged_in()) echo "navigate-admin.png"; else echo"navigate-login.png"; ?>" alt="انتقال به پنل مدیریت نوشهرآنلاین" ></a>
  <!-- begin footer -->
  <div id="footer"><div id="footerInner"><?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?><?php endif; ?></div></div>
  <div id="copyright">
   <div id="copyrightInner">
	<?php if (get_option('Sebarg_copyright') <> ""){ echo stripslashes(stripslashes(get_option('Sebarg_copyright'))); }else{ echo 'تنها کافی است به تنظیمات قالب رفته و این متن را جایگزین کنید!لطفا به عبارت روبرو دست نزنید!'; }?>
    <div id="Evazzadehbottom" class="en"><a href="http://validator.w3.org/check?uri=referer" title='HTML5 Valid' target="_blank"> HTML5 Valid</a> By <a href="http://www.Javad.Evazzadeh.com" title='جواد عوض زاده کاکرودی | Javad Evazzadeh kakroudi' target="_blank">Javad Evazzadeh </a>|<a href="http://www.Evazzadeh.com" title='با افتخار قدرت گرفته از وردپرس، طراحی اولیه توسط سایت فایو، طراحی مجدد از جواد عوض زاده کاکرودی' target="_blank"> Some Right Reserved</a></div>
   </div>
  </div>
  <!-- end footer -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js.js"></script>
</body>
</html>