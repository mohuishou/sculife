<?php if (!defined('THINK_PATH')) exit();?><div class="collection">
    <a href="#!" class="collection-item">Alan<span class="badge">1</span></a>
    <a href="#!" class="collection-item">Alan<span class="new badge">4</span></a>
    <a href="#!" class="collection-item">Alan</a>
    <a href="#!" class="collection-item">Alan<span class="badge">14</span></a>
</div>
<div class="am-g am-g-fixed">
    <div class="am-u-md-12">
        <div class="am-panel am-panel-primary">
            <div class="am-panel-hd"><?php echo ($tag); ?></div>
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