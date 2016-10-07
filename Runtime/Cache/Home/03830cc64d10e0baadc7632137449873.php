<?php if (!defined('THINK_PATH')) exit(); if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
		<a href='<?php echo U("/".$type."/".$v["id"]);?>'><?php echo ($v["name"]); ?></a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>