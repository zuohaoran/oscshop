<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ((isset($title) && ($title !== ""))?($title):''); echo C('SITE_TITLE'); ?></title>
  <meta name="keywords" content="<?php echo ((isset($meta_keywords) && ($meta_keywords !== ""))?($meta_keywords):''); ?>" />
  <meta name="description" content="<?php echo ((isset($meta_description) && ($meta_description !== ""))?($meta_description):''); ?>" />

  <link type="image/x-icon" href="/oscshop/<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="icon">
  <link type="image/x-icon" href="/oscshop/<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="bookmark">

  <link href="/oscshop/Common/bt/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/oscshop/Themes/Home/default/Public/css/style.css" rel="stylesheet" type="text/css">  
  <script src="/oscshop/Common/js/jquery/jquery-1.10.2.min.js"></script>
  <script src="/oscshop/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
  <script src="/oscshop/Common/bt/js/bootstrap.min.js"></script>
 
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/oscshop/"><?php echo C('SITE_NAME'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">产品 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo U('/products');?>">全部</a></li>
                  
                  <?php W('Menu/menu_show',array('category'));?>	
                  	
                </ul>
              </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">图册 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo U('/gallerys');?>">全部产品</a></li>
                  
                  <?php W('Menu/menu_show',array('gcategory'));?>	
                  	
                </ul>
              </li>
            <li><a href="<?php echo U('/blogs');?>"><?php echo C('BLOG_TITLE'); ?></a></li>
            <li><a href="<?php echo U('/about');?>">关于我们</a></li>            
            <li><a href="<?php echo U('/contact');?>">联系我们</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
          	<li><a><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?php echo C('TELEPHONE'); ?></a></li>
          	<?php if(is_login()){ ?>
          	<li><a href="<?php echo U('/order');?>"><?php echo session('user_auth.username') ?></a></li>
          	<?php }else{ ?>
          	<li><a href="<?php echo U('/login');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
          	<?php } ?>	
          	<li><a href="<?php echo U('/cart');?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
          		<span id="cart-total"> <?php $t=session('cart_total');if(isset($t)){echo $t;}else{echo 0;} ?> </span></a>
          	</li>
          	
          </ul>
          
        </div>
      </div>
  </nav>	
   
	<div id="cart">
		<div class="container">
			<div class="row">
				<div class="clearfix col-md-12">
				<div class="page-title">
					<h1>购物车 (<span id="weight"><?php echo ($weight); ?></span><?php echo get_weight_name(C('WEIGHT_ID')); ?> ) </h1>
				</div>
				
					<div class="alert alert-danger hidden" role="alert">
					  <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
					  <div id="fail"></div>
					</div>
				
				<form>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>									
									<td  colspan="2" class="text-left">商品名称</td>
									<td class="text-left">型号</td>
									<td class="text-left">数量</td>
									<td class="text-left">单价</td>
									<td class="text-left">总计</td>
									<td class="remove"></td>
								</tr>
							</thead>
							
							<tbody>
								<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr class="goods<?php echo md5($key); ?>">
										<td style="width:100px;padding:20px;"><a href="<?php echo U('/goods/'.$d['goods_id']);?>"><img src="/oscshop/<?php echo ($d["image"]); ?>" /></a></td>
										<td ><?php echo ($d["name"]); ?>
											<?php if (!$d['stock']) { ?>
											  <span class="stock">***</span>
											  <?php } ?>
											  <div>
												<?php foreach ($d['option'] as $option) { ?>
												<small><?php echo $option['name']; ?>: <?php echo $option['value']; ?></small><br />
												<?php } ?>
							                
											  </div>
										</td>
										<td><?php echo ($d["model"]); ?></td>
										<td class="quantity" style="width:200px;">
											<div id="select_number<?php echo md5($key); ?>" class="select_number">
											  <input class="text" type="text" name="quantity<?php echo ($d["goods_id"]); ?>"  onkeyup='change_quantity("<?php echo ($d["goods_id"]); ?>",this,"<?php echo ($key); ?>","<?php echo md5($key); ?>");' value="<?php echo ($d["quantity"]); ?>" size="1" />
												<div>
													<button onclick='changeQty(1,"<?php echo ($d["goods_id"]); ?>","<?php echo ($key); ?>","<?php echo md5($key); ?>"); return false;' class="increase">+</button>
													<button onclick='changeQty(0,"<?php echo ($d["goods_id"]); ?>","<?php echo ($key); ?>","<?php echo md5($key); ?>"); return false;' class="decrease">-</button>
												</div>
											</div>						
										</td>		
										
										<td class="price">￥<?php echo round($d['price'] ,2); ?></td>
										<td class="total">￥<?php echo round($d['total'] ,2); ?></td>
										
										<td>
											<a href="<?php echo U('/remove/'.$key);?>">
												<img class="btooltip" data-toggle="tooltip" data-placement="bottom" data-original-title="删除" src="/oscshop/Themes/Home/default/Public/image/remove.png" alt="删除" title="删除" />
											</a>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
							
						</table>
					</div>
				</form>				
				 <div class="cart-total ">
				    <table id="total">				      
				      <tr>				
				        <td class="right price last">总计：<?php echo '￥'.$total_price; ?></td>
				      </tr>				      
				    </table>
				 </div>
			     <div class="buttons cart-buttons">					  
				      <a href="<?php echo U('/checkout');?>" class="btn btn-primary btn-checkout">结算</a>
				      <a href="/oscshop/" class="btn btn-primary btn-continue">继续购物</a>
			     </div>  
				</div>				
			</div>
		</div>
	</div>
  
  <footer>
    <div class="container">        
 
      <div class="credit">
        <p id="templatemo_cr_bar">
          Copyright © 2015 <a id="ypc" href=<?php echo C('SITE_URL'); ?>><?php echo C('SITE_NAME'); ?></a> <a id="bei" target="_blank" href="http://www.miitbeian.gov.cn"><?php echo C('SITE_ICP'); ?></a>
        </p>
      </div>
    </div>
  </footer>   
  
<script>	

function update_cart(id,qty,option,key){
	$.post(
		'<?php echo U("/cart_update");?>',
		{id:id,q:qty,o:option},
		function(json){
		
			$('.alert').addClass('hidden');
			
			if (json['success']) {				
				
				$('#cart-total').text(json['success']);
				
				$('#select_number' + key).find("input").val(qty);
				
				$('.goods' + key).find("td.price").text('￥ '+json['price']);
				
				$('.goods' + key).find("td.total").text('￥ '+json['total_price']);
				
				$('.last').text('总计： ￥ '+json['total_all_price']);
				
				$('#weight').text(json['weight']);
				
			}else if(json['error']){
				
				$('.alert-danger').removeClass('hidden');
				
				$('#fail').text(json['error']);				
				
			}	
		}
	);
}

function change_quantity(key,input,option,key){
	var qty=input.value;	
	update_cart(key,qty,option,key);
}

function changeQty(increase,goods_id,option,key) {
    var qty = parseInt($('#select_number' + key).find("input").val());  

    if ( !isNaN(qty) ) {
    	//增加
		if(increase){			
			update_cart(goods_id,(qty+1),option,key);
		}else{
			update_cart(goods_id,(qty-1),option,key);
		}     
    }
}	
$('.close').click(function(){
		$(this).parent().addClass('hidden');
});
</script>

</body>
<html>