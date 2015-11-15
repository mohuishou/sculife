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
      <link rel="stylesheet" href="/Match/sculife/Public/css/amazeui.min.css">
      <link rel="stylesheet" href="/Match/sculife/Public/css/admin.css">
      
    <link rel="stylesheet" type="text/css" href="/Match/sculife/Public/css/tooltip.css">

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
<div class="am-topbar-brand"> <a href="<?php echo U('Index/index');?>"><strong>sculife</strong></a>
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
							<a href="<?php echo U('Admin/logout');?>">
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
               <a href="<?php echo U('Admin/systemConfig');?>">
                    <span class="am-icon-cog"></span>
                    系统设置
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
                <a href="<?php echo U('Admin/logout');?>">
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
        <div class="admin-content">
            <div class="am-g">
                <div class="am-cf am-padding">
    <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">系统设置</strong>
        /
        <small>在这里进行相关的系统配置</small>
    </div>
</div>
<ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
    <li>
        <a href="<?php echo U('Admin/systemConfig?system=list');?>" class="am-text-success">
            <span class="am-icon-btn am-icon-file-text-o"></span>
            <br/>
            网站列表
            <br/>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Admin/systemConfig?system=add');?>" class="am-text-warning">
            <span class="am-icon-btn am-icon-pencil-square-o"></span>
            <br/>
            添加网站
            <br/>
        </a>
    </li>
    <li>
        <a href="javascript:alert('正在建设中，尽请期待！')" class="am-text-danger">
            <span class="am-icon-btn am-icon-bell-o"></span>
            <br/>
            分类&便签
        </a>
    </li>
    <li>
        <a data-am-modal="{target: '#spider',  width: 400, height: 225}" class="am-text-secondary">
            <span class="am-icon-btn am-icon-circle-o"></span>
            <br/>
           手动抓取文章
        </a>
    </li>
</ul>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="spider">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">手动获取数据
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
        <!-- 注意这里别忘了添加$符号 -->
            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><button class="spider am-btn am-btn-xs am-btn-primary" url="<?php echo U('Admin/spider',array('tag'=>$vo['tag'],'category'=>$vo['category']));?>" ><?php echo ($vo["tag"]); echo ($vo["category"]); ?></button><?php endforeach; endif; else: echo "" ;endif; ?>
            <button class="spider am-btn am-btn-xs am-btn-success" url="<?php echo U('Admin/spider');?>">获取全部消息</button>
        </div>
    </div>
</div>
                <?php switch($_GET['system']): case "add": ?><div class="am-u-md-8 am-u-sm-12">
    <div class="am-panel am-panel-primary">
        <div class="am-panel-hd">添加网站</div>
        <div class="am-panel-bd am-scrollable-horizontal ">
            <form class="am-form  " >
                <div class="am-form-group">
                    <label>网站名</label>
                    <input type="text" name="tag" class=""  placeholder="如：青春川大">
                </div>
                <div class="am-form-group">
                    <label>分类</label>
                    <input type="text" name="category" class=""  placeholder="如：公告">
                </div>
                <div class="am-form-group">
                    <label>网站主域名</label>
                    <input type="text" name="mainsite" class=""  placeholder="如：http://youth.scu.edu.cn/">
                </div>
                <div class="am-form-group">
                    <label>需要抓取的详细地址</label>
                    <input type="text" class="" name="url"  placeholder="如：http://youth.scu.edu.cn/index.php/main/web/notice">
                </div>
                <div class="am-form-group">
                    <label>正则（包含//，以#分割）</label>
                            <textarea name="pattern"  rows="5" placeholder='如：/<a href="(\/index.php\/main\/web\/notice\/detail\/i\/(.+?))">(.+?)<\/a>/
                                #/<div class="content-art">[\s\S]*<div class="share">/
                                #/\/uploads.+?>/'></textarea>
                    <p>注意: 前两条必须有，分别是目录的抓取以及详细文章的抓取，第三条是用于转换文章中链接的路径的</p>
                </div>
                <div class="am-form-group">
                    <button class="am-btn am-btn-primary am-btn-block">确认添加</button>
                </div>
            </form>
        </div>
    </div>
</div><?php break;?>
                    <?php default: ?><div class="am-u-md-12">
    <div class="am-panel am-panel-primary">
        <div class="am-panel-hd">所有网站</div>
        <div class="am-panel-bd am-scrollable-horizontal am-padding-0">
            <table class="am-table  am-text-nowrap am-table-hover am-table-centered">
                <thead>
                    <th>选择</th>
                    <th>编号</th>
                    <th>名称</th>
                    <th>分类</th>
                    <th>抓取网址</th>
                    <th>操作</th>
                </thead>
                <tbody>
                <?php if(is_array($config)): $i = 0; $__LIST__ = $config;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox" name=""></td>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($vo["tag"]); ?></td>
                        <td><?php echo ($vo["category"]); ?></td>
                        <td><?php echo ($vo["url"]); ?></td>
                        <td>
                            <a class="am-btn am-btn-xs am-btn-default" title="点击禁用" href="#">已启用</a>
                            <a class="am-btn am-btn-xs am-btn-primary" href="#">修改</a>
                            <a class="am-btn am-btn-xs am-btn-danger" href="#">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div><?php endswitch;?>

            </div>
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
	<script src="/Match/sculife/Public/js/amazeui.ie8polyfill.min.js"></script>
	<![endif]-->

	<!--[if (gte IE 9)|!(IE)]>
	<!-->
	<script src="/Match/sculife/Public/js/jquery.min.js"></script>
	<!--<![endif]-->
	<script src="/Match/sculife/Public/js/amazeui.min.js"></script>
	<script src="/Match/sculife/Public/js/app.js"></script>

      
<script src="/Match/sculife/Public/js/tooltip.js"></script>
 <script type="text/javascript">
   
    /**
     * 将手动抓取数据改成ajax交互，大大提高交互体验
     */
    $(".spider").unbind("click").click(function(){
        var btn=$(this);
        btn.button('loading');
        var url=btn.attr('url');
        $.get(url,function(data,status){
            if(data.status==1){
                 $('body').tooltip({
                  autoshow: true,
                  content: data.message,
                  style:'success',
                  duration:1000,
                  zIndex:9999
                });
                btn.button('reset');
            } 
        });
    });

    
</script>   

  </body>
</html>