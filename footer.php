</section><script type="text/javascript">
	jQuery(document).ready(function(){jQuery("#w-loading div").animate({width:"100%"},800,function(){setTimeout(function(){jQuery("#w-loading div").fadeOut(500);});});});
</script>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
         CopyRight 2013-2014  <a href="http://iat.net.cn" title="如果明天过后">如果明天过后</a> | Powered by <a href="http://wordpress.org" target="_blank">wordpress</a> | Themed by <a href="http://yusi123.com" target="_blank">欲思博客</a>
| Analysed by 
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
