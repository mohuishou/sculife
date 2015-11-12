<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
  <head>
      <title>sculife</title>
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
      <link rel="stylesheet" href="/Match/webDesign/Public/css/index.css">
      
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
      
	<!--header开始-->
<header >
    <div class="header  am-topbar">
        <div class="am-g am-g-fixed">
            <h1 class="am-topbar-brand">
                <a href="<?php echo U('Index/index');?>">SCULIFE</a>
            </h1>

            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

            <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
                <ul class="am-nav am-nav-pills am-topbar-nav">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li class="am-dropdown" data-am-dropdown>
                        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                            青春川大 <span class="am-icon-caret-down"></span>
                        </a>
                        <ul class="am-dropdown-content">
                            <li class="am-dropdown-header">请选择类别</li>
                            <li><a href="<?php echo U('Index/notice?tag=youth');?>">公告</a></li>
                            <li><a href="<?php echo U('Index/news?tag=youth');?>">团情快讯</a></li>
                        </ul>
                    </li>
                    <li class="am-dropdown" data-am-dropdown>
                        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                            学工部 <span class="am-icon-caret-down"></span>
                        </a>
                        <ul class="am-dropdown-content">
                            <li class="am-dropdown-header">请选择类别</li>
                            <li><a href="<?php echo U('Index/notice?tag=xsc');?>">公告</a></li>
                            <li><a href="<?php echo U('Index/news?tag=xsc');?>">团情快讯</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="am-topbar-right">
                    <a href="<?php echo U('Admin/index');?>" class="am-btn am-topbar-btn am-btn-sm">进入后台</a>
                </div>
            </div>
        </div>

    </div>


</header>
<!--header结束-->
	<?php if(I('id')||I('tag')){ ?>
	<?php }else{ ?>
	<!--slider开始-->
<div class="slider ">
    <div data-am-widget="slider" class="am-slider am-slider-c2" data-am-slider='{&quot;directionNav&quot;:false}' >
        <ul class="am-slides">
            <li>
                <img src="/Match/webDesign/Public/img/banner-1.jpg">
                <div class="am-slider-desc">远方 有一个地方 那里种有我们的梦想</div>
            </li>
            <li>
                <img src="/Match/webDesign/Public/img/banner-2.jpg">
                <div class="am-slider-desc">某天 也许会相遇 相遇在这个好地方</div>
            </li>
        </ul>
    </div>
</div>
<!--slider结束-->
	<?php } ?>

      
      
	<?php if(I('id')){ ?>
		<div class="am-g am-g-fixed">
	<div class="am-u-md-12 am-u-md-centered am-u-sm-11 am-u-sm-centered">
		<article class="am-article">
			<div class="am-article-hd">
				<h1 class="article-title am-article-title"><?php echo ($data["title"]); ?></h1>
				<p class="am-article-meta"><?php echo ($data["tag"]); ?> <?php echo ($data["category"]); ?> <?php echo ($data["ctime"]); ?></p>
			</div>

			<div class="am-article-bd">
				<div class="article-body"><?php echo ($data["content"]); ?></div>
			</div>

		</article>
	</div>
</div>

	<?php }elseif(I('tag')){ ?>
		<div class="am-g am-g-fixed">
    <div class="am-u-md-12">
        <div class="am-panel am-panel-primary">
            <div class="am-panel-hd"><?php echo ($_GET['tag']); ?></div>
            <div class="am-panel-bd">
                <ul class="am-list">
                    <?php if(is_array($list['list'])): $i = 0; $__LIST__ = $list['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-am-scrollspy="{animation:'scale-up',delay:'300'}">
                            <a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>'><?php echo ($vo["title"]); ?></a>
                            <div class="list-tag"><span class="am-icon-tag"></span><span><?php echo ($vo["category"]); ?></span></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div id="table-page">
                        <?php echo ($list["page"]); ?>
                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
	<?php }else{ ?>
		<div id="main" class="am-g am-g-fixed">
    <div class="am-u-md-12">
        <p class="am-text-center am-margin-top">在这里你可以看到最新最快的川大信息</p>
    </div>
    <!--选项卡开始-->
    <div class="am-u-md-12">
        <div data-am-widget="tabs"
             class="am-tabs am-tabs-default"
                >
            <ul class="am-tabs-nav am-cf">
                <li class="am-active"><a href="[data-tab-panel-0]">青春川大</a></li>
                <li class=""><a href="[data-tab-panel-1]">学工部</a></li>
                <li class=""><a href="[data-tab-panel-2]">教务处</a></li>
            </ul>
            <div class="am-tabs-bd">
                <div data-tab-panel-0 class="am-tab-panel am-active">
                    <ul class="am-list">
                        <?php if(is_array($youth)): $i = 0; $__LIST__ = $youth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-am-scrollspy="{animation:'scale-up',delay:'300'}">
                                <a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>'><?php echo ($vo["title"]); ?></a>
                                <div class="list-tag"><span class="am-icon-tag"></span><span><?php echo ($vo["category"]); ?></span></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div style="text-align: right;margin-top:5px;">
                            <a href="<?php echo U('Index/articleList?tag=青春川大');?>" class="am-text-right">更多</a>
                        </div>

                    </ul>
                </div>
                <div data-tab-panel-1 class="am-tab-panel ">
                    <ul class="am-list">
                        <?php if(is_array($xsc)): $i = 0; $__LIST__ = $xsc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-am-scrollspy="{animation:'scale-up',delay:'300'}">
                                <a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>'><?php echo ($vo["title"]); ?></a>
                                <div class="list-tag"><span class="am-icon-tag"></span><span><?php echo ($vo["category"]); ?></span></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div style="text-align: right;margin-top:5px;">
                            <a href="<?php echo U('Index/articleList?tag=学工部');?>" class="am-text-right">更多</a>
                        </div>
                    </ul>
                </div>
                <div data-tab-panel-2 class="am-tab-panel ">
                    建设中。。。敬请期待
                </div>
            </div>
        </div>
    </div>
    <!--选项卡结束-->
</div>
	<?php } ?>

      
		<footer>
		<hr>
		<p class="am-padding-left am-text-center">© 2015 SCULIFE.</p>
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