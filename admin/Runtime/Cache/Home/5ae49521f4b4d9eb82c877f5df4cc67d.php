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
      <link rel="stylesheet" href="/Match/sculife/Public/css/materialize.min.css">
      <link rel="stylesheet" href="/Match/sculife/Public/css/materialize.icon.css">
      <link rel="stylesheet" href="/Match/sculife/Public/css/index.css">
      
  </head>
  <body>

      
	<!--header开始-->
<nav class="teal lighten-2">
    <div class="nav-wrapper container ">
        <a href="<?php echo U('Index/index');?>" class="brand-logo waves-effect waves-light">SCULIFE</a>
        <a href="#" data-activates="mobile" class="button-collapse"><img style="margin-top:0.7em; " src="/Match/sculife/Public/img/menu.png"></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="" href="<?php echo U('Index/index');?>">首页</a></li>
            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class=" dropdown-button" href="#!" data-activates='dropdown<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></a></li>
                <ul id='dropdown<?php echo ($vo["id"]); ?>' class='teal lighten-2 dropdown-content'>
                   <?php if(is_array($vo['son'])): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class=" waves-effect waves-light" href="<?php echo U('Index/articleList',array('tid'=>$v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a href="<?php echo U('Admin/login');?>">后台登陆</a></li>
        </ul>
        <ul class="teal lighten-2 side-nav" id="mobile">
            <li><a class=" waves-effect waves-ligh  waves-effect waves-lightt" href="<?php echo U('Index/index');?>">首页</a></li>
            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class=" waves-effect waves-light dropdown-button " href="#!" data-activates='dropdown2<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></a></li>
                <ul id='dropdown2<?php echo ($vo["id"]); ?>' class='teal lighten-2 dropdown-content'>
                    <?php if(is_array($vo['son'])): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class=" waves-effect waves-light" href="<?php echo U('Index/articleList',array('tid'=>$v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a class=" waves-effect waves-light" href="<?php echo U('Admin/login');?>">后台登陆</a></li>
        </ul>
    </div>
</nav>

<!--header结束-->
	<?php if(I('id')||I('tag')){ ?>
	<?php }else{ ?>

	<?php } ?>

      
      
	<?php if(I('id')){ ?>
		<div id="article">
	<div class="row">
		<div class="">
			<div class="card-panel grey lighten-4">
				<div class="  container">
					<div class="card-content black-text">
						<h5 class="card-title"><?php echo ($data["title"]); ?></h5>
						<a href="<?php echo ($data["website"]); ?>" class="btn waves-effect waves-teal" title="点击查看原网页"><?php if(is_array($data['tag'])): $i = 0; $__LIST__ = $data['tag'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); ?>/<?php endforeach; endif; else: echo "" ;endif; echo ($data["category"]); ?> <?php echo ($data["ctime"]); ?></a>
						<div class=""><?php echo ($data["content"]); ?></div>
					</div>
					<div class="card-action">

					</div>
					<!-- 多说评论框 start -->
					<div class="ds-thread" data-thread-key="<?php echo ($data["id"]); ?>" data-title="<?php echo ($data["title"]); ?>"></div>
					<!-- 多说评论框 end -->
					<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
					<script type="text/javascript">
						var duoshuoQuery = {short_name:"sculife"};
						(function() {
							var ds = document.createElement('script');
							ds.type = 'text/javascript';ds.async = true;
							ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
							ds.charset = 'UTF-8';
							(document.getElementsByTagName('head')[0]
							|| document.getElementsByTagName('body')[0]).appendChild(ds);
						})();
					</script>
					<!-- 多说公共JS代码 end -->
				</div>

			</div>


		</div>
	</div>
</div>
</div>



	<?php }elseif(I('tid')){ ?>
		<div class="row">
    <div class="container">
        <div class="card-panel white">
                <div class="card-content ">
                    <h5 class="card-title"><?php echo ($tag["0"]["name"]); ?></h5>
                    <div class="collection ">
                        <?php if(is_array($list['list'])): $i = 0; $__LIST__ = $list['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>' class="collection-item waves-effect waves-light truncate "><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="card-action pagination">
                    <?php echo ($list["page"]); ?>
                    </div>
                </div>

        </div>


    </div>
</div>


	<?php }else{ ?>
		<div class="parallax-container">
    <div class="parallax"><img src="/Match/sculife/Public/img/banner-1.jpg"></div>
    <div class=""></div>
</div>
<div class="section white ">
    <div class="row container">
        <div class="col s12 m6">
            <h2 class="header">SCULIFE公告牌</h2>
            <p class="grey-text text-darken-3 lighten-3">这里有你能用到的全川大所有的官方公告，如果没有请<a class="main-a truncate hoverable waves-effect waves-teal" href="mailto:1@lailin.xyz">联系我们</a></p>
        </div>
        <div class="main-number col s12 m6">
            <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>' class="main-a truncate hoverable "><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="/Match/sculife/Public/img/banner-2.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
        <div class="col s12 m6">
            <h2 class="header">SCULIFE新闻榜</h2>
            <p class="grey-text text-darken-3 lighten-3">这里有你想看到的全川大所有的官方新闻，如果没有请<a  class="main-a truncate hoverable waves-effect waves-teal"  href="mailto:1@lailin.xyz">联系我们</a></p>
        </div>
        <div class="main-number col s12 m6">
            <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>' class="main-a truncate hoverable "><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="/Match/sculife/Public/img/banner-3.jpg"></div>
</div>

	<?php } ?>

      
	<footer class="page-footer teal lighten-2" style="margin:0;">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">SCULIFE</h5>
				<p class="grey-text text-lighten-4">SCULIFE致力于打造川大官方通知公告，新闻资讯，活动预告等信息聚合平台，服务于喜欢参加比赛或者希望了解川大官方信息的同学或者是老师</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">友情链接</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="http://lxl520.com">LXL520</a></li>
					<li><a class="grey-text text-lighten-3" href="http://fyscu.com">飞扬俱乐部</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2015 Copyright SCULIFE
			<a  class="grey-text text-lighten-4 right main-a truncate hoverable waves-effect waves-teal"  href="mailto:1@lailin.xyz">联系我们</a>
		</div>
	</div>
</footer>
<!--返回顶部-->
<button class="material-scrolltop" type="button"></button>
	<script src="/Match/sculife/Public/js/jquery.min.js"></script>
	<script src="/Match/sculife/Public/js/materialize.min.js"></script>
	<script src="/Match/sculife/Public/js/index.js"></script>

      
  </body>
</html>