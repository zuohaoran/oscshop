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
                  <li><a href="<?php echo U('/products');?>">全部产品</a></li>
                  
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
  
<section id="goods-show" >
	<div id="content" class="main container">
		<div class="col-main">
			<div class="row">
			<div class="container">
				<div class="alert alert-success hidden" role="alert">
				  <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
				  <div id="success"></div>
				</div>
					
				<div class="alert alert-danger hidden" role="alert">
				  <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
				  <div id="fail"></div>
				</div>
			</div>	
				<div class="product-view col-md-9">
					<div class="product-essential">
						
						<div class="product-img-box col-xs-12 col-sm-6 col-md-6 col-lg-5">
							<div class="product-image">
								<div class="large-image"> 
				                  <a href="/oscshop/Uploads/image/<?php echo ($goods["image"]); ?>" class="cloud-zoom" id="zoom1" rel="" > 
				                    <img src="/oscshop/<?php echo ($goods["image_thumb"]); ?>"> 
				                  </a> 
				                </div>
				                
				                <div class="flexslider flexslider-thumb">
				                    <ul class="previews-list slides">
				                       <?php foreach ($goods_image as $image) { ?>
				                       <li>
				                        <a href="/oscshop/Uploads/image/<?php echo $image['image']; ?>" title="" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '/oscshop/<?php echo $image['image_360_360']; ?>'">
				                          <img src="/oscshop/<?php echo $image['thumb']; ?>" alt = "Thumbnail 1"/>
				                        </a>
				                      </li>
				                       <?php }?>
				                    </ul>
				                </div>
				                
							</div>
						</div>
						<div class="product-shop col-xs-12 col-sm-6 col-md-6 col-lg-7">
							<div class="product-name">
								<h1><?php echo ($goods["name"]); ?></h1>
							</div>
							
							 
							
							<div class="price-block">
								<div class="price-box">
									<p class="regular-price">
										<span class="price">￥<?php echo round($goods['price'] ,2); ?></span>
									</p>
								</div>
							</div>
							
							<ul class="list-unstyled">								
								<li>型号 ：<?php echo ($goods["model"]); ?></li>
								<li>生产地 ：<?php echo ($goods["location"]); ?></li>
								<li>重量：<?php echo round($goods['weight'] ,2).get_weight_name($goods['weight_class_id']); ?></li>
								<li>规格： 长 <?php echo round($goods['length'] ,2).get_length_name($goods['length_class_id']); ?>  
									宽 <?php echo round($goods['width'] ,2).get_length_name($goods['length_class_id']); ?>  
									高 <?php echo round($goods['height'] ,2).get_length_name($goods['length_class_id']); ?> 
								</li>
									
							<?php if(isset($discount)){ ?>
									<?php foreach ($discount as $k => $v){ ?>
										<li><?php echo $v['quantity'].'个 或更多 ￥'.$v['price']; ?></li>
									<?php } ?>									
								<?php } ?>
							</ul>
							
						  
					      <?php if ($options) { ?>
						      <div class="options">
						        <h2>可选项</h2>
						        <?php foreach ($options as $option) { ?>  	
						        <?php if ($option['type'] == 'select') { ?>
						        	<div class="boss_check">
						        <div class="box-check">	
						        <div id="option-<?php echo $option['goods_option_id']; ?>" class="option">
						          <div class="title_text"><b><?php echo $option['name']; ?>:</b>
						          <?php if ($option['required']) { ?>
						          <span class="required">*</span>
						          <?php } ?></div>
						          <select name="option[<?php echo $option['goods_option_id']; ?>]">
						            <option value=""> --- 请选择 --- </option>
						            <?php foreach ($option['option_value'] as $option_value) { ?>
						            <option value="<?php echo $option_value['goods_option_value_id']; ?>"><?php echo $option_value['name']; ?>
						            <?php if ($option_value['price']) { ?>
						            (<?php echo $option_value['price_prefix']; echo $option_value['price']; ?>)
						            <?php } ?>
						            </option>
						            <?php } ?>
						          </select>
						        </div>
						         </div>
						         </div>
						        <?php } ?>
						      
						        
						        
						        <?php if ($option['type'] == 'radio') { ?>
								<div class="boss_check">
									<div class="box-check">
								        <div id="option-<?php echo $option['goods_option_id']; ?>">
								          <p><b><?php echo $option['name']; ?>:</b>
								          <?php if ($option['required']) { ?>
								          <span class="required">*</span>
								          <?php } ?></p>
								          <?php foreach ($option['option_value'] as $option_value) { ?>								        						         
								          									          	
								          <label for="option-value-<?php echo $option_value['goods_option_value_id']; ?>">								          	
								          	<input  class="option" type="radio" name="option[<?php echo $option['goods_option_id']; ?>]" value="<?php echo $option_value['goods_option_value_id']; ?>" id="option-value-<?php echo $option_value['goods_option_value_id']; ?>" />								          	       										          	
									          	<?php if(!empty($option_value['image'])) { ?>		
										          	<a href="/oscshop/Uploads/image/<?php echo $option_value['image']; ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo '/'.resize($option_value['image'],360,360); ?>'">
										          		<img src="/oscshop/<?php echo resize($option_value['image'],30,30); ?>" />									          										          
										          	</a>
									          	 <?php } ?>	
									          	<?php echo $option_value['name']; ?>
									            <?php if ($option_value['price']) { ?>
									            (<?php echo $option_value['price_prefix']; echo $option_value['price']; ?>)
									            <?php } ?>								            
								          </label>										     
								           
								          <br />
								          <?php } ?>
								        </div>
									</div>
								</div>	
						        <?php } ?>
						        
						        <?php if ($option['type'] == 'checkbox') { ?>
								<div class="box-check">
						        <div id="option-<?php echo $option['goods_option_id']; ?>" class="option">
						          <p><b><?php echo $option['name']; ?>:</b>
						          <?php if ($option['required']) { ?>
						          <span class="required">*</span>
						          <?php } ?></p>
						          <?php foreach ($option['option_value'] as $option_value) { ?>
						          <input type="checkbox" name="option[<?php echo $option['goods_option_id']; ?>][]" value="<?php echo $option_value['goods_option_value_id']; ?>" id="option-value-<?php echo $option_value['goods_option_value_id']; ?>" />
						          <label for="option-value-<?php echo $option_value['goods_option_value_id']; ?>">
						           <?php if(!empty($option_value['image'])) { ?>		
						          	<a href="/oscshop/Uploads/image/<?php echo $option_value['image']; ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo '/'.resize($option_value['image'],360,360); ?>'">
						          		<img src="/oscshop/<?php echo resize($option_value['image'],30,30); ?>" />									          										          
						          	</a>
					          	 <?php } ?>	
						           <?php echo $option_value['name']; ?>
						            <?php if ($option_value['price']) { ?>
						            (<?php echo $option_value['price_prefix']; echo $option_value['price']; ?>)
						            <?php } ?>
						          </label>
						          <br />
						          <?php } ?>
						        </div>
						        </div>
													       
						        <?php } ?>						      
						        <?php } ?>
						      </div>
						      <?php } ?>				  
							 
							
							<div id="product">
								<hr>
							
							<div class="add-to-box">
                       
				            <div class="add-to-cart">

				              <div class="pull-left">
				              <div class="select_number">	
								<input class="text" type="text" id="quantity" value="1" size="2" name="quantity">
								<button class="increase" onclick="changeQty(1); return false;">+</button>
								<button class="decrease" onclick="changeQty(0); return false;">-</button>
								</div>
								<input type="hidden" value="<?php echo ($goods["goods_id"]); ?>" size="2" name="goods_id">
				                </div> 
				
				                <div class="pull-left">
					                <button id="button-cart" class="button btn-cart" data-loading-text="Loading..." type="button">
										<span>加入购物车</span>
									</button>
				              
				            	</div>
				            
					 
				
				          </div>
							
							
							</div>
							
						</div>
						
					</div>
				</div>
				
				
				<div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
					<div class="add_info">
						<ul id="product-detail-tab" class="nav nav-tabs product-tabs">	
							<li class="active">
								<a data-toggle="tab" href="#product_tabs_description">商品描述</a>
							</li>
							
						</ul>
						<div id="productTabContent" class="tab-content">
							<div id="product_tabs_description" class="tab-pane active">
								<div class="std"><?php echo htmlspecialchars_decode($goods['description']); ?></div>
							</div>
							
							
						</div>
					</div>		
				</div>
				
				<div class="hidden-xs hidden-sm" id="related">
					<div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
						<?php W('Product/related_goods_list');?>
					</div>
				</div>
				
			</div>
			<div class="col-md-3 hidden-xs hidden-sm">
				<?php W('Product/hot_goods_list',array('热门产品','viewed desc','5'));?>
			</div>
		</div>
	</div>
	</div>
</section>
  
  <footer>
    <div class="container">        
 
      <div class="credit">
        <p id="templatemo_cr_bar">
          Copyright © 2015 <a id="ypc" href=<?php echo C('SITE_URL'); ?>><?php echo C('SITE_NAME'); ?></a> <a id="bei" target="_blank" href="http://www.miitbeian.gov.cn"><?php echo C('SITE_ICP'); ?></a>
        </p>
      </div>
    </div>
  </footer>   
  

<link type="text/css" rel="stylesheet" href="/oscshop/Common/font-awesome/css/font-awesome.min.css">		
<link href="/oscshop/Themes/Home/default/Public/js/flexslider/flexslider.css" rel="stylesheet" type="text/css"> 	
<link href="/oscshop/Themes/Home/default/Public/js/cloud-zoom/cloud-zoom.1.0.3.css" rel="stylesheet" type="text/css" />

<script src="/oscshop/Themes/Home/default/Public/js/cloud-zoom/cloud-zoom1.js"></script>
<script src="/oscshop/Themes/Home/default/Public/js/flexslider/jquery.flexslider.js"></script>

<script>
function changeQty(increase) {
    var qty = parseInt($('.select_number').find("input").val());
    if ( !isNaN(qty) ) {
        qty = increase ? qty+1 : (qty > <?php echo $goods['minimum']; ?> ? qty-1 : <?php echo $goods['minimum']; ?>);
        $('.select_number').find("input").val(qty);
    }
}	
$('#button-cart').bind('click', function() {

	$.ajax({
		url: "<?php echo U('/cart_add');?>",
		type: 'post',
		data: $('#content input[type=\'text\'],#content input[type=\'hidden\'],#content input[type=\'radio\']:checked,#content input[type=\'checkbox\']:checked,#content select'),
		dataType: 'json',
		success: function(json) {
			
			$('.alert').addClass('hidden');
			
			$('.box-check').removeClass('text-error');
			
			$('.text-danger').remove();
			if (json['error']) {
			
                 if (json['error']['option']) {
		          for (i in json['error']['option']) {
		            var element = $('#option-'+i);
		
		            if (element.parent().hasClass('box-check')) {
		              element.parent().addClass('text-error').after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
		            } else {
		              element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
		            }
		          }
					}
					
					// $('.text-danger').parent().addClass('has-error');
		}	
			
			if (json['success']) {				
				$('.alert-success').removeClass('hidden');
				$('#success').text(json['success']);
				$('#cart-total').text(json['total']);
			}else if(json['error']['quantity']){
				$('.alert-danger').removeClass('hidden');
				$('#fail').text(json['error']['quantity']);
			}	
			
		}
	});	
});

$('.close').click(function(){
	$(this).parent().addClass('hidden');
});
	

</script>


</body>
<html>