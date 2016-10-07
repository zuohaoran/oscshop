<?php if (!defined('THINK_PATH')) exit();?><div class="hot_goods">
<h3><?php echo ($title); ?></h3>
<ul>
	<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li>
		<a class="popular-product-item" href="<?php echo U('/goods/'.$d['goods_id']);?>">
			<img src="/oscshop/<?php echo ($d["image"]); ?>" title="<?php echo ($d["name"]); ?>" alt="<?php echo ($d["name"]); ?>">
			<span class="popular-product-item_title font-additional font-weight-bold text-uppercase"><?php echo ($d["name"]); ?></span>
			<span class="popular-product-item_price font-additional color-third">￥<?php echo ($d["price"]); ?></span>
		</a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>