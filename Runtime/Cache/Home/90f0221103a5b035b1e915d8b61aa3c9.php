<?php if (!defined('THINK_PATH')) exit();?><section class="container">
  	<h3 style="text-align:center;"><?php echo ($title); ?></h3>
  	<hr class="featurette-divider"> 
  	<div class="row">  		
  		<ul class="clearfix col-md-12">
  			<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li class="col-md-3 col-sm-6">
          	
            <a href="<?php echo U('/goods/'.$d['goods_id']);?>" class="img-thumbnail center-block"><img class="img-responsive center-block" src="/oscshop/<?php echo ($d["image"]); ?>" title="<?php echo ($d["name"]); ?>" alt="<?php echo ($d["name"]); ?>"></a>
			<p class="goods_title text-center text-uppercase"><?php echo ($d["name"]); ?></p>      
			<p class="product-item_price font-additional font-weight-normal customColor">￥<?php echo ($d["price"]); ?></p>   
			
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>  
     </div>  
</section>