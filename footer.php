</section><script type="text/javascript">
	jQuery(document).ready(function(){jQuery("#w-loading div").animate({width:"100%"},800,function(){setTimeout(function(){jQuery("#w-loading div").fadeOut(500);});});});
</script>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
Copyright © 2013-2015  <a href="http://iat.net.cn" title="如果明天过后">如果明天过后</a> | Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a> | Themed by <a href="http://yusi123.com" target="_blank">欲思博客</a> | Improved by <a href="https://github.com/yaoshanliang/iat_theme" target="_blank">iat_theme</a> | Safe by <a href='http://fuyun.safedog.cn' name='24d8e616791f3bebb69d3202b7a00434'  target='_blank'>安全狗</a> | Analysed by <a href="http://tongji.baidu.com/web/7597801/trend/latest?siteId=5205380" target="_blank">百度统计</a>
<!--统计代码开始-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?a8f517fee81bd1ee9a017d6f0cbfe789";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--统计代码结束-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/iat.js"></script> 

        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>

<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
	echo'<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}  
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>
