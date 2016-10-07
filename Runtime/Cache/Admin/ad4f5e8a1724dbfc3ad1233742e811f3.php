<?php if (!defined('THINK_PATH')) exit();?><ul class="nav nav-list">
<?php if(is_array($admin_menu)): $i = 0; $__LIST__ = $admin_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
	<a href="#" class="dropdown-toggle">
		<i class="<?php echo ($v["icon"]); ?>"></i>
		<span class="menu-text"><?php echo ($v["title"]); ?></span>
		<b class="arrow icon-angle-down"></b>
	</a>
	<?php if(isset($v['children'])){ ?>
		<ul class="submenu">
			<?php if(is_array($v['children'])): foreach($v['children'] as $key=>$vo): if(isset($vo['children'])){ ?>
				<li>	
				 <a href="#" class="dropdown-toggle">		
				 	<i class="icon-double-angle-right"></i>			
					<span class="menu-text"><?php echo ($vo["title"]); ?></span>
					<b class="arrow icon-angle-down"></b>
				</a>
				<ul class="submenu">
				 <?php foreach ($vo['children'] as $k2 => $v2){ ?>
					<li>
						<a href="/oscshop/admin.php?s=/<?php echo ($v2["url"]); ?>">
							<i class="icon-double-angle-right"></i>
							<span class="url-title"><?php echo ($v2["title"]); ?></span>
						</a>
					</li>
				 <?php } ?>
				 </ul>
				 
				</li>
				
				 
			<?php }else{ ?>
				<li>
				<a href="/oscshop/admin.php?s=/<?php echo ($vo["url"]); ?>">
					<i class="icon-double-angle-right"></i>
					<span class="url-title"><?php echo ($vo["title"]); ?></span>
				</a>
				</li>
			<?php } endforeach; endif; ?>
		</ul>
	<?php } ?>
</li><?php endforeach; endif; else: echo "" ;endif; ?>	
</ul>