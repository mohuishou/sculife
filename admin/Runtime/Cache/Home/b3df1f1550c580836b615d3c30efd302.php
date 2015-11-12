<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
  <head>
      <title>后台-sculife|BY-艺林清森团队</title>
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
      
	<header class="am-topbar admin-header">
		<div class="am-topbar-brand"> <strong>sculife</strong>
			<small>后台管理</small>
		</div>

		<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
			<span class="am-sr-only">导航切换</span>
			<span class="am-icon-bars"></span>
		</button>

		<div class="am-collapse am-topbar-collapse" id="topbar-collapse">

			<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">

				<li class="am-dropdown" data-am-dropdown>
					<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
						<span class="am-icon-users"></span>
						管理员
						<span class="am-icon-caret-down"></span>
					</a>
					<ul class="am-dropdown-content">
						<li>
							<a href="#">
								<span class="am-icon-user"></span>
								资料
							</a>
						</li>
						<li>
							<a href="#">
								<span class="am-icon-cog"></span>
								设置
							</a>
						</li>
						<li>
							<a href="#">
								<span class="am-icon-power-off"></span>
								退出
							</a>
						</li>
					</ul>
				</li>
				<li class="am-hide-sm-only">
					<a href="javascript:;" id="admin-fullscreen">
						<span class="am-icon-arrows-alt"></span>
						<span class="admin-fullText">开启全屏</span>
					</a>
				</li>
			</ul>
		</div>
	</header>

      
      
	<div class="am-cf admin-main">
		<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li>
                <a href="<?php echo U('Admin/index');?>">
                    <span class="am-icon-home"></span>
                    首页
                </a>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target: '#notice-nav'}">
                    <span class="am-icon-file"></span>
                    公告
                    <span class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="notice-nav">
                    <li>
                        <a href="<?php echo U('Admin/notice?tag=youth');?>" class="am-cf">
                            <span class="am-icon-file-text-o"></span>
                            青春川大
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/notice?tag=xsc');?>">
                            <span class="am-icon-pencil-square-o"></span>
                            学工部
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a class="am-cf" data-am-collapse="{target: '#news-nav'}">
                    <span class="am-icon-file"></span>
                   新闻
                    <span class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="news-nav">
                    <li>
                        <a href="<?php echo U('Admin/news?tag=youth');?>" class="am-cf">
                            <span class=" am-icon-file-text-o"></span>
                            青春川大
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/news?tag=xsc');?>">
                            <span class=" am-icon-pencil-square-o"></span>
                            学工部
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Admin/log?tag=log');?>">
                    <span class="am-icon-pencil-square-o"></span>
                    日志
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="am-icon-sign-out"></span>
                    注销
                </a>
            </li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p>
                    <span class="am-icon-bookmark"></span>
                    公告
                </p>
                <p>不积跬步，无以至千里；</p><p>不积小流，无以成江海。</p><p align="right">—— sculife</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p>
                    <span class="am-icon-tag"></span>
                    wiki
                </p>
                <p>Welcome to the sculife!</p>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
	<?php switch($_GET['tag']): case "youth": ?><!-- content start -->
<div class="admin-content">

    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo ($des); ?></strong> / <small>青春川大</small></div>
    </div>

    <div class="am-g">
        <div class="am-u-md-12">
            <table class="am-table am-table-bordered am-table-radius am-table-hover am-table-centered">
                <thead>
                <tr>
                    <th>选择</th>
                    <th>编号</th>
                    <th>标题</th>
                    <th>来源</th>
                    <th>分类</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo ($i); ?></td>
                        <td><a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>'><?php echo ($vo["title"]); ?></a></td>
                        <td><?php echo ($vo["tag"]); ?></td>
                        <td><?php echo ($vo["category"]); ?></td>
                        <td><?php echo ($vo["ctime"]); ?></td>
                        <td><a class="am-text-danger" href="#">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div id="table-page">
                <?php echo ($page); ?>
            </div>
            <p></p>
        </div>
    </div>
</div><?php break;?>
		<?php case "xsc": ?><!-- content start -->
<div class="admin-content">

    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo ($des); ?></strong> / <small>学工部</small></div>
    </div>

    <div class="am-g">
        <div class="am-u-md-12">
            <table class="am-table am-table-bordered am-table-radius am-table-hover am-table-centered">
                <thead>
                <tr>
                    <th>选择</th>
                    <th>编号</th>
                    <th>标题</th>
                    <th>来源</th>
                    <th>分类</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo ($i); ?></td>
                        <td><a href='<?php echo U("Index/article",array("id"=>$vo["id"]));?>'><?php echo ($vo["title"]); ?></a></td>
                        <td><?php echo ($vo["tag"]); ?></td>
                        <td><?php echo ($vo["category"]); ?></td>
                        <td><?php echo ($vo["ctime"]); ?></td>
                        <td><a class="am-text-danger" href="#">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div id="table-page">
                <?php echo ($page); ?>
            </div>
            <p></p>
        </div>
    </div>
</div><?php break;?>
		<?php case "log": ?><!-- content start -->
<div class="admin-content">

    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">日志</strong> / <small>日志</small></div>
    </div>

    <div class="am-g">
        <div class="am-u-md-12">
            <table class="am-table am-table-bordered am-table-radius am-table-hover am-table-centered">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>日志内容</th>
                    <th>创建时间</th>
                </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($vo["message"]); ?></td>
                        <td><?php echo ($vo["ctime"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div id="table-page">
                <?php echo ($page); ?>
            </div>
            <p></p>
        </div>
    </div>
</div><?php break;?>
		<?php default: ?>
		<!-- content start -->
		<div class="admin-content">

			<div class="am-cf am-padding">
				<div class="am-fl am-cf">
					<strong class="am-text-primary am-text-lg">首页</strong>
					/
					<small>最新公告</small>
				</div>
			</div>

			<ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
				<li>
					<a href="#" class="am-text-success">
						<span class="am-icon-btn am-icon-file-text-o"></span>
						<br/>
						青春川大
						<br/>
						<?php echo ($count["youth"]); ?>
					</a>
				</li>
				<li>
					<a href="#" class="am-text-warning">
						<span class="am-icon-btn am-icon-pencil-square-o"></span>
						<br/>
						学工部
						<br/>
						<?php echo ($count["xsc"]); ?>
					</a>
				</li>
				<li>
					<a href="javascript:alert('正在建设中，尽请期待！')" class="am-text-danger">
						<span class="am-icon-btn am-icon-bell-o"></span>
						<br/>
						教务处
						<br/>
						8082
					</a>
				</li>
				<li>
					<a href="javascript:alert('正在建设中，尽请期待！')" class="am-text-secondary">
						<span class="am-icon-btn am-icon-circle-o"></span>
						<br/>
						更多
						<br/>
						3000
					</a>
				</li>
			</ul>



			<div class="am-g">
				<div class="am-u-md-7" id="new-notice">
					<div class="am-cf am-padding">
						<div class="am-fl am-cf">
							<strong class=am-text-lg">最近通知</strong>
							/
							<small>最近抓取到的通知</small>
						</div>
					</div>
					<table class="am-table am-table-bordered am-table-radius am-table-hover am-table-centered">
						<thead>
							<tr>
								<th>编号</th>
								<th>标题</th>
								<th>来源</th>
								<th>分类</th>
								<th>创建时间</th>
							</tr>
						</thead>
						<?php if(is_array($someArticle)): $i = 0; $__LIST__ = $someArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($i); ?></td>
								<td><?php echo ($vo["title"]); ?></td>
								<td><?php echo ($vo["tag"]); ?></td>
								<td><?php echo ($vo["category"]); ?></td>
								<td><?php echo ($vo["ctime"]); ?></td>

							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>

				</div>
				<div class="am-u-md-5" id="some-log">
					<div class="am-cf am-padding">
						<div class="am-fl am-cf">
							<strong class=am-text-lg">最近日志</strong>
							/
							<small>最近的操作日志</small>
						</div>
					</div>
					<table class="am-table am-table-bordered am-table-radius am-table-hover am-table-centered">
						<thead>
						<tr>
							<th>编号</th>
							<th>操作</th>
							<th>创建时间</th>
						</tr>
						</thead>
						<?php if(is_array($someLog)): $i = 0; $__LIST__ = $someLog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($i); ?></td>
								<td><?php echo ($vo["message"]); ?></td>
								<td><?php echo ($vo["ctime"]); ?></td>

							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>

				</div>
			</div>
		</div>
		<!-- content end --><?php endswitch;?>
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