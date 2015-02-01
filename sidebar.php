<aside class="sidebar">	
<div class="widget widget_text">
	<div class="textwidget">
		<div class="social">
<?php
	echo '<a href="'.'mailto:'.dopt('d_emailContact').'" rel="external nofollow" title="Email" >
	<i class="email fa fa-envelope-o"></i></a>'; 

	echo '<a class="weixin"><i class="weixins fa fa-weixin"></i>
	<div class="weixin-popover"><div class="popover bottom in">
	<div class="arrow"></div><div class="popover-title">'.'</div>
	<div class="popover-content">
	<img src="http://iat.net.cn/weixin.gif" ></div></div></div></a>';

	echo '<a class="weixin"><i class="qq fa fa-qq"></i>
	<div class="weixin-popover"><div class="popover bottom in">
	<div class="arrow"></div><div class="popover-title">'.'</div>
	<div class="popover-content">
	<img src="http://iat.net.cn/qq.jpg" ></div></div></div></a>';
?>
		</div>
	</div>
</div>

<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sitesidebar')) : endif; 

if (is_single()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_postsidebar')) : endif; 
}
else if (is_page()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_pagesidebar')) : endif; 
}
else if (is_home()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sidebar')) : endif; 
}
else {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_othersidebar')) : endif; 
}
?>
</aside>
