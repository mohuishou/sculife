<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
  <head>
      <title>前台-sculife|BY-艺林清森团队</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="川大公告牌|BY-艺林清森团队,最新最快最美的川大活动新闻速递">
      <meta name="keywords" content="川大公告牌,四川大学,艺林清森团队,活动,四川大学活动,">
      <!-- 为360浏览器这种双核浏览器默认开启极速模式 -->
      <meta name="renderer" content="webkit">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <link rel="stylesheet" href="/Match/webDesign/Public/css/amazeui.min.css">
      <link rel="stylesheet" href="/Match/webDesign/Public/css/admin.css">
      
  </head>
  <body>
      <!--[if lte IE 9]>
  <p class="browsehappy">
    你正在使用 <strong>过时</strong>
    的浏览器，SCULIFE 暂不支持。 请
    <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！
  </p>
  <![endif]-->
      

      
      
		<div class="am-g am-g-fixed">
	<div class="am-u-md-12 am-u-md-centered am-u-sm-11 am-u-sm-centered">
		<article class="am-article">
			<div class="am-article-hd">
				<h1 class="am-article-title"><?php echo ($data["title"]); ?></h1>
				<p class="am-article-meta"><?php echo ($data["tag"]); ?> <?php echo ($data["category"]); ?> <?php echo ($data["ctime"]); ?></p>
			</div>

			<div class="am-article-bd">
				<pre><?php echo ($data["content"]); ?></pre>
			</div>

		</article>
	</div>
</div>



      
		<footer>
		<hr>
		<p class="am-padding-left">© 2015 SCULIFE,BY-艺林清森团队.</p>
	</footer>
	<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
		<span class="am-icon-btn am-icon-th-list"></span>
	</a>
	<!--[if lt IE 9]>
	<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
	<script src="/Match/webDesign/Public/js/amazeui.ie8polyfill.min.js"></script>
	<![endif]-->

	<!--[if (gte IE 9)|!(IE)]>
	<!-->
	<script src="/Match/webDesign/Public/js/jquery.min.js"></script>
	<!--<![endif]-->
	<script src="/Match/webDesign/Public/js/amazeui.min.js"></script>
	<script src="/Match/webDesign/Public/js/app.js"></script>

      
  </body>
</html>