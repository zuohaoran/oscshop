<?php if (!defined('THINK_PATH')) exit();?><div class="row">  	
<h3>推荐产品</h3>
<hr class="featurette-divider">	
  		<ul class="clearfix col-md-12">
  			<?php if(is_array($related_goods)): $i = 0; $__LIST__ = $related_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li class="col-md-4 col-sm-6">
          	
            <a href="<?php echo U('/goods/'.$d['goods_id']);?>" class="img-thumbnail center-block"><img class="img-responsive center-block" src="/oscshop/<?php echo ($d["image"]); ?>" title="<?php echo ($d["name"]); ?>" alt="<?php echo ($d["name"]); ?>"></a>
			<p class="goods_title text-center text-uppercase"><?php echo ($d["name"]); ?></p>      
			<p class="product-item_price font-additional font-weight-normal customColor">￥<?php echo ($d["price"]); ?></p>   
			
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>  
</div>