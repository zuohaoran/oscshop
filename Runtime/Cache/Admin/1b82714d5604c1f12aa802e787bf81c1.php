<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo C('SITE_NAME'); ?>-后台管理中心</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="./Themes/Admin/Public/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="./Themes/Admin/Public/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		
		<link type="image/x-icon" href="<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="icon">
		<link type="image/x-icon" href="<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="bookmark">
		
		
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace.min.css" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace-skins.min.css" />
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="./Themes/Admin/Public/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="./Themes/Admin/Public/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="./Themes/Admin/Public/js/html5shiv.js"></script>
		<script src="./Themes/Admin/Public/js/respond.min.js"></script>
		<![endif]-->
		
		
			
				
		
	</head>

	<body class="navbar-fixed">
		<div class="navbar navbar-default navbar-fixed-top" id="navbar">
			
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="<?php echo U('Index/index');?>" class="navbar-brand">
						<small>
							<!--
							<i class="icon-leaf"></i>
							-->
							<?php echo C('SITE_NAME'); ?> 后台管理
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							
								<span class="user-info">
									<?php echo session('user_auth.username'); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li class="divider"></li>

								<li>
									<a target="_blank" href="/oscshop/">网站前台</a>
									<a href="<?php echo U('Public/clear');?>">清空缓存</a>
									<a href="<?php echo U('Public/logout');?>">退出系统</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar sidebar-fixed" id="sidebar">					
				
					<?php W('Menu/menu_show');?>
					

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#"><?php echo ($breadcrumb1); ?></a>
							</li>
							<li class="active"><?php echo ($breadcrumb2); ?></li>
							
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						
							
<div class="page-header">
		<h1>
			<?php echo ($breadcrumb2); ?>
			<small>
				<i class="icon-double-angle-right"></i>
				<?php echo ($crumbs); ?>
			</small>
			
			<button name="send" form="form-goods" type="submit" style="float:right;"  class="btn btn-sm btn-primary">提交</button>
			
		</h1>
	</div>
	<div class="row">
	<div class="col-xs-12">	
		<div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-goods" class="form-horizontal">
        
        <?php if(!empty($_GET['id'])): ?><input name="goods_id" type="hidden" value="<?php echo ($_GET['id']); ?>" /><?php endif; ?>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">常规项</a></li>
            <li><a href="#tab-data" data-toggle="tab">基本信息</a></li>
            <li><a href="#tab-links" data-toggle="tab">关联</a></li>   
            <li><a href="#tab-option" data-toggle="tab">选项</a></li>  
            <li><a href="#tab-discount" data-toggle="tab">折扣</a></li>                    
            <li><a href="#tab-image" data-toggle="tab">图片参数</a></li>            
          </ul>
          <div class="tab-content">
          	<!-- 常规 START -->
	          	<div class="tab-pane active" id="tab-general">
	          		
	          		<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-name2">商品名称：</label>
						<div class="col-sm-10">
							<input id="input-name2" class="form-control" type="text" placeholder="商品名称：" value="<?php echo ((isset($goods["name"]) && ($goods["name"] !== ""))?($goods["name"]):''); ?>" name="goods_description[name]">
						</div>
					</div>
					
					<div class="form-group">
	                    <label class="col-sm-2 control-label" for="input-description">商品简介：</label>
	                    <div class="col-sm-10">
	                      <textarea name="goods_description[summary]" class="form-control" rows="5"><?php echo ((isset($description["summary"]) && ($description["summary"] !== ""))?($description["summary"]):''); ?></textarea>	
	                    </div>
                  	</div>
					
					<div class="form-group">
	                    <label class="col-sm-2 control-label" for="input-description">商品详情：</label>
	                    <div class="col-sm-10">
	                      <textarea name="goods_description[description]" id="description"><?php echo ((isset($description["description"]) && ($description["description"] !== ""))?($description["description"]):''); ?></textarea>	
	                    </div>
                  	</div>
		
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-meta-description2">Meta标签描述：</label>
						<div class="col-sm-10">
							<textarea id="input-meta-description2" class="form-control" placeholder="Meta标签描述：" rows="5" name="goods_description[meta_description]"><?php echo ((isset($description["meta_description"]) && ($description["meta_description"] !== ""))?($description["meta_description"]):''); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-meta-keyword2">Meta标签关键词：</label>
						<div class="col-sm-10">
							<textarea id="input-meta-keyword2" class="form-control" placeholder="Meta标签关键词：" rows="5" name="goods_description[meta_keyword]"><?php echo ((isset($description["meta_keyword"]) && ($description["meta_keyword"] !== ""))?($description["meta_keyword"]):''); ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-tag2">
							<span title="" data-toggle="tooltip" data-original-title="使用逗号分开">商品标签：</span>
						</label>
						<div class="col-sm-10">
							<input id="input-tag2" class="form-control" type="text" placeholder="商品标签：" value="<?php echo ((isset($description["tag"]) && ($description["tag"] !== ""))?($description["tag"]):''); ?>" name="goods_description[tag]">
						</div>
					</div>
					
	          	</div>
	          	<!-- 常规 END -->
	          	<!-- 基本信息 START -->
	          	<div class="tab-pane" id="tab-data">
	          		
	          		<div class="form-group required">
		                <label class="col-sm-2 control-label" for="input-image">
		                <span title="" data-toggle="tooltip" data-original-title="上传800x800的图片">商品图片：</span>
		                </label>
		                
		                <div class="col-sm-10" id="thumb">
		                  <a href="#" data-toggle="image" class="img-thumbnail">
		                  	<img osctype="image" <?php if($goods['image']): ?>src="/oscshop/<?php echo ($goods["thumb_image"]); ?>" 
								<?php else: ?> 
								src="/oscshop/Common/image/no_image_100x100.jpg"<?php endif; ?>  />
								</a>
		                  <input osctype="image_input" type="hidden" name="image" value="<?php echo ((isset($goods["image"]) && ($goods["image"] !== ""))?($goods["image"]):''); ?>" id="input-image" />
		            </div>
		            
		            </div>   
		            
		            <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">商品型号：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="商品型号" value="<?php echo ((isset($goods["model"]) && ($goods["model"] !== ""))?($goods["model"]):''); ?>" name="model">
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">库存单位：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="库存单位" value="<?php echo ((isset($goods["sku"]) && ($goods["sku"] !== ""))?($goods["sku"]):''); ?>" name="sku">
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">生产地：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="商品位置" value="<?php echo ((isset($goods["location"]) && ($goods["location"] !== ""))?($goods["location"]):''); ?>" name="location">
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">销售价格：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="销售价格" value="<?php echo ((isset($goods["price"]) && ($goods["price"] !== ""))?($goods["price"]):''); ?>" name="price">
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">商品数量：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="商品数量" value="<?php echo ((isset($goods["quantity"]) && ($goods["quantity"] !== ""))?($goods["quantity"]):''); ?>" name="quantity">
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">最小起定量：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="最小起定量" value="<?php echo ((isset($goods["minimum"]) && ($goods["minimum"] !== ""))?($goods["minimum"]):''); ?>" name="minimum">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-subtract">扣减库存：</label>
						
						
							<div class="col-sm-10">
								<label class="radio-inline">
								<input type="radio" checked="checked" value="1" name="subtract">是</label>
								<label class="radio-inline">
								<input type="radio" value="0" name="subtract">否</label>
							</div>
						
					</div>
		            
		            <div class="form-group">
						<label class="col-sm-2 control-label" for="input-stock-status">
						库存状况：</label>
						<div class="col-sm-10">							
							<select id="input-stock-status" class="form-control" name="stock_status_id">
								<?php if(is_array($stock_status)): $i = 0; $__LIST__ = $stock_status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["stock_status_id"]); ?>" <?php if(isset($goods)&&($v["stock_status_id"] == $goods['stock_status_id'])): ?>selected="selected"<?php endif; ?>  ><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">需要配送：</label>
						<div class="col-sm-10">
							<label class="radio-inline">
							<input type="radio" checked="checked" value="1" name="shipping">是</label>
							<label class="radio-inline">
							<input type="radio" value="0" name="shipping">否</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-length">包装尺寸(L x W x H)：</label>
						<div class="col-sm-10">
							<div class="row">
								<div class="col-sm-4">
									<input id="input-length" class="form-control" type="text" placeholder="长度：" value="<?php echo ((isset($goods["length"]) && ($goods["length"] !== ""))?($goods["length"]):''); ?>" name="length">
								</div>
								<div class="col-sm-4">
									<input id="input-width" class="form-control" type="text" placeholder="宽度" value="<?php echo ((isset($goods["width"]) && ($goods["width"] !== ""))?($goods["width"]):''); ?>" name="width">
								</div>
								<div class="col-sm-4">
									<input id="input-height" class="form-control" type="text" placeholder="高度" value="<?php echo ((isset($goods["height"]) && ($goods["height"] !== ""))?($goods["height"]):''); ?>" name="height">
								</div>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-length-class">尺寸单位：</label>
						<div class="col-sm-10">
							
							<select id="input-length-class" class="form-control" name="length_class_id">
								<?php if(is_array($length_class)): $i = 0; $__LIST__ = $length_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option <?php if(isset($goods)&&($v["length_class_id"] == $goods['length_class_id'])): ?>selected="selected"<?php endif; ?> value="<?php echo ($v["length_class_id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
					
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">重量：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="重量" value="<?php echo ((isset($goods["weight"]) && ($goods["weight"] !== ""))?($goods["weight"]):''); ?>" name="weight">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-length-class">重量单位：</label>
						<div class="col-sm-10">
							
							<select id="input-length-class" class="form-control" name="weight_class_id">
								<?php if(is_array($weight_class)): $i = 0; $__LIST__ = $weight_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option <?php if(isset($goods)&&($v["weight_class_id"] == $goods['weight_class_id'])): ?>selected="selected"<?php endif; ?> value="<?php echo ($v["weight_class_id"]); ?>"  ><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
		            
		            <div class="form-group">
						<label class="col-sm-2 control-label">商品状态：</label>
						<div class="col-sm-10">
							<label class="radio-inline">
							<input type="radio" checked="checked" value="1" name="status">启用</label>
							<label class="radio-inline">
							<input type="radio" value="0" name="status">停用</label>
						</div>
					</div>
		            
		            <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-meta-title2">排序：</label>
						<div class="col-sm-10">
							<input id="input-meta-title2" class="form-control" type="text" placeholder="排序" value="<?php echo ((isset($goods["sort_order"]) && ($goods["sort_order"] !== ""))?($goods["sort_order"]):''); ?>" name="sort_order">
						</div>
					</div>
		            
	          	</div>
	          	<!-- 基本信息 END -->
	          	
	          	
	          	<!--折扣 START -->
	          	<div class="tab-pane" id="tab-discount">
	          		<div class="table-responsive">
	                	<table id="discount" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
								  <td class="text-left">数量</td>
								  <td class="text-right">价格</td>
								  <td></td>
								</tr>
							</thead>
							<tbody>
							<?php $discount_row = 0; ?>
		                     <?php if(isset($goods_discount)){ ?>
			                    <?php foreach ($goods_discount as $discount) { ?>
				                    <tr id="discount-row<?php echo $discount_row; ?>">
				                      <td class="text-left"><input type="text" name="goods_discount[<?php echo $discount_row; ?>][quantity]" value="<?php echo $discount['quantity']; ?>" class="form-control" /></td>
				                      <td class="text-left"><input type="text" name="goods_discount[<?php echo $discount_row; ?>][price]" value="<?php echo $discount['price']; ?>" class="form-control" /></td>
				                      <td class="text-left"><button type="button" onclick="$('#discount-row<?php echo $discount_row; ?>').remove();" data-toggle="tooltip" class="btn btn-danger"><i class="icon-trash"></i></button></td>
				                    </tr>
			                    <?php $discount_row++; ?>
			                    <?php } ?>
			                 <?php } ?>
							</tbody>
						</table>
		                <div><a  onclick="addDiscount();" class="add_image btn btn-primary ">添加折扣</a></div>
                  </div>
	          		
	          		
	          	</div>
	          	<!--折扣 END -->
	          	<!-- 图片 START -->
	          	<div class="tab-pane" id="tab-image">
	          		<div class="table-responsive">
	                	<table id="images" class="table table-striped table-bordered table-hover">
		                  <thead>
		                    <tr>
		                      <td class="text-left">商品图片</td>
		                      <td class="text-right">选项排序</td>
		                      <td></td>
		                    </tr>
		                  </thead>
		                	 <tbody>
                     <?php $image_row = 0; ?>
                     <?php if(isset($goods_images)){ ?>
	                    <?php foreach ($goods_images as $goods_image) { ?>
		                    <tr id="gallery-image-row<?php echo $image_row; ?>">
		                      <td class="text-left"><a href="" id="thumb-image<?php echo $image_row; ?>" num="<?php echo $image_row; ?>" type="gallery" data-toggle="image" class="img-thumbnail"><img osctype="gallery_image<?php echo $image_row; ?>" src="<?php echo $goods_image['thumb']; ?>" alt="" title="" /></a><input osctype="gallery_image_input<?php echo $image_row; ?>" type="hidden" name="goods_image[<?php echo $image_row; ?>][image]" value="<?php echo $goods_image['image']; ?>" id="input-image<?php echo $image_row; ?>" /></td>
		                      <td class="text-right"><input type="text" name="goods_image[<?php echo $image_row; ?>][sort_order]" value="<?php echo $goods_image['sort_order']; ?>" class="form-control" /></td>
		                      <td class="text-left"><button type="button" onclick="$('#gallery-image-row<?php echo $image_row; ?>').remove();" data-toggle="tooltip" class="btn btn-danger"><i class="icon-trash"></i></button></td>
		                    </tr>
	                    <?php $image_row++; ?>
	                    <?php } ?>
	                 <?php } ?>
                  </tbody>
		          </table>
		                <div><a  onclick="addImage();" class="add_image btn btn-primary ">添加图片</a></div>
                  </div>
	          	</div>
	          	<!-- 图片 END -->
	          	
	          	<!-- 关联 START -->
	          	<div class="tab-pane" id="tab-links">
	          		<div class="form-group">
	                <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="(自动完成)">商品分类</span></label>
	                <div class="col-sm-10">
	                  <input type="text" name="category" value="" placeholder="商品分类" id="input-category" class="form-control" />
	                  <div id="goods-category" class="well well-sm" style="height: 150px; overflow: auto;">
	                  	<?php if(isset($goods_categories)){ ?>
		                    <?php foreach ($goods_categories as $goods_category) { ?>
			                    <div id="goods-category<?php echo $goods_category['category_id']; ?>"><i class="icon-ban-circle"></i> <?php echo $goods_category['name']; ?>
			                      <input type="hidden" name="goods_category[]" value="<?php echo $goods_category['category_id']; ?>" />
			                    </div>
		                    <?php } ?>
	                    <?php } ?>
	                  </div>
	                </div>
	              </div>
	              

	              
	          	</div>
	          	<!-- 关联 END -->
	       		<!-- 选项 START -->
	       		<div class="tab-pane" id="tab-option">
	       			<div class="row">
	       				<div class="col-sm-2">
	       					<ul class="nav nav-pills nav-stacked" id="option">
			                    <?php $option_row = 0; ?>
			                     <?php $option_value_row = 0; ?>
			                    <?php foreach ($goods_options as $goods_option) { ?>
			                    <li><a href="#tab-option<?php echo $option_row; ?>" type="<?php echo $goods_option['type']; ?>" data-toggle="tab"><i class="icon-ban-circle" onclick="$('a[href=\'#tab-option<?php echo $option_row; ?>\']').parent().remove(); $('#tab-option<?php echo $option_row; ?>').remove(); $('#option a:first').tab('show');"></i> <?php echo $goods_option['name']; ?></a></li>
			                    <?php $option_row++; ?>
			                    <?php } ?>
			                    <li>
			                      <input type="text" name="option" value="" id="input-option" class="form-control" />
			                    </li>
			                </ul>
	       				</div>
	       				<div class="col-sm-10">
	       					<div class="tab-content">
	       						
					<?php $option_row = 0; ?>
                    <?php $option_value_row = 0; ?>
                    <?php foreach ($goods_options as $goods_option) { ?>
                    <div class="tab-pane" id="tab-option<?php echo $option_row; ?>">
                      <input type="hidden" name="goods_option[<?php echo $option_row; ?>][goods_option_id]" value="<?php echo $goods_option['goods_option_id']; ?>" />
                      <input type="hidden" name="goods_option[<?php echo $option_row; ?>][name]" value="<?php echo $goods_option['name']; ?>" />
                      <input type="hidden" name="goods_option[<?php echo $option_row; ?>][option_id]" value="<?php echo $goods_option['option_id']; ?>" />
                      <input type="hidden" name="goods_option[<?php echo $option_row; ?>][type]" value="<?php echo $goods_option['type']; ?>" />
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-required<?php echo $option_row; ?>">必选</label>
                        <div class="col-sm-10">
                          <select name="goods_option[<?php echo $option_row; ?>][required]" id="input-required<?php echo $option_row; ?>" class="form-control">
                            <?php if ($goods_option['required']) { ?>
                            <option value="1" selected="selected">是</option>
                            <option value="0">否</option>
                            <?php } else { ?>
                            <option value="1">是</option>
                            <option value="0" selected="selected">否</option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      
                      <?php if ($goods_option['type'] == 'select' || $goods_option['type'] == 'radio' || $goods_option['type'] == 'checkbox') { ?>
                      <div class="table-responsive">
                        <table id="option-value<?php echo $option_row; ?>" class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              
                              <?php if($goods_option['type'] == 'select'){ ?>
                              	<td class="text-left"></td>
                              <?php }else{ ?>
                              	<td class="text-left">图片</td>
                              <?php } ?>
                              
                              <td class="text-left">选项值</td>
                              <td class="text-right">商品数量</td>
                              <td class="text-left">扣减库存</td>
                              <td class="text-right">销售价格</td>
                             
                              <td class="text-right">重 量</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($goods_option['goods_option_value'] as $goods_option_value) { ?>
                            <tr id="option-value-row<?php echo $option_value_row; ?>">
                              
                              <?php if($goods_option['type'] == 'select'){ ?>
                              	<td class="text-left"></td>
                              <?php }else{ ?>
                              	<td class="text-left">
                              		<a href="#" id="option-image-row<?php echo $option_value_row; ?>" data-toggle="image" num="<?php echo $option_value_row; ?>" type="option" class="img-thumbnail" >
                              		<img osctype="option_image<?php echo $option_value_row; ?>" src="<?php if(!empty($goods_option_value['image'])){echo resize($goods_option_value['image'],100,100);}else{ echo '/oscshop/Common/image/no_image_100x100.jpg'; } ?>" alt="" title="" />
                              		<input osctype="option_image_input<?php echo $option_value_row; ?>" type="hidden" name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][option_value_imgae]" value="<?php echo $goods_option_value['image']; ?>" id="input-image<?php echo $option_value_row; ?>" />
                              		</a>
                              	</td>
                              <?php } ?>
                              
                              <td class="text-left"><select name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][option_value_id]" class="form-control">
                                  <?php if (isset($option_values[$goods_option['option_id']])) { ?>                                
	                                  <?php foreach ($option_values[$goods_option['option_id']] as $option_value) { ?>                                  
		                                  
		                                  <option value="<?php echo $option_value['option_value_id']; ?>" <?php if ($option_value['option_value_id'] == $goods_option_value['option_value_id']) {echo '  selected="selected"';} ?>><?php echo $option_value['value']; ?></option>
		                                                                   
	                                  <?php } ?>
                                  <?php } ?>
                                </select>
                                <input type="hidden" name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][goods_option_value_id]" value="<?php echo $goods_option_value['goods_option_value_id']; ?>" /></td>
                              <td class="text-right"><input type="text" name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][quantity]" value="<?php echo $goods_option_value['quantity']; ?>" placeholder="<?php echo $entry_quantity; ?>" class="form-control" /></td>
                              <td class="text-left"><select name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][subtract]" class="form-control">
                                  <?php if ($goods_option_value['subtract']) { ?>
                                  <option value="1" selected="selected">是</option>
                                  <option value="0">否</option>
                                  <?php } else { ?>
                                  <option value="1">是</option>
                                  <option value="0" selected="selected">否</option>
                                  <?php } ?>
                                </select></td>
                              <td class="text-right"><select name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][price_prefix]" class="form-control">
                                  <?php if ($goods_option_value['price_prefix'] == '+') { ?>
                                  <option value="+" selected="selected">+</option>
                                  <?php } else { ?>
                                  <option value="+">+</option>
                                  <?php } ?>
                                  <?php if ($goods_option_value['price_prefix'] == '-') { ?>
                                  <option value="-" selected="selected">-</option>
                                  <?php } else { ?>
                                  <option value="-">-</option>
                                  <?php } ?>
                                </select>
                                <input type="text" name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][price]" value="<?php echo $goods_option_value['price']; ?>" placeholder="<?php echo $entry_price; ?>" class="form-control" /></td>
                             <td class="text-right"><select name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][weight_prefix]" class="form-control">
                                  <?php if ($goods_option_value['weight_prefix'] == '+') { ?>
                                  <option value="+" selected="selected">+</option>
                                  <?php } else { ?>
                                  <option value="+">+</option>
                                  <?php } ?>
                                  <?php if ($goods_option_value['weight_prefix'] == '-') { ?>
                                  <option value="-" selected="selected">-</option>
                                  <?php } else { ?>
                                  <option value="-">-</option>
                                  <?php } ?>
                                </select>
                                <input type="text" name="goods_option[<?php echo $option_row; ?>][goods_option_value][<?php echo $option_value_row; ?>][weight]" value="<?php echo $goods_option_value['weight']; ?>" placeholder="<?php echo $entry_weight; ?>" class="form-control" /></td>
                              <td class="text-left"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row<?php echo $option_value_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="icon-trash bigger-120"></i></button></td>
                            </tr>
                            <?php $option_value_row++; ?>
                            <?php } ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="6"></td>
                              <td class="text-left"><button type="button" onclick="addOptionValue('<?php echo $option_row; ?>','<?php echo $goods_option['type']; ?>');" data-toggle="tooltip"  class="btn btn-primary">添加选项</button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id="option-values<?php echo $option_row; ?>" style="display: none;">
                        <?php if (isset($option_values[$goods_option['option_id']])) { ?>
                        <?php foreach ($option_values[$goods_option['option_id']] as $option_value) { ?>
                        <option value="<?php echo $option_value['option_value_id']; ?>"><?php echo $option_value['value']; ?></option>
                        <?php } ?>
                        <?php } ?>
                      </select>
                      <?php } ?>
                    </div>
                    <?php $option_row++; ?>
                    <?php } ?>	       						
	       						
	       						
	       					</div>
	       				</div>
	       			</div>
	       		</div>
	       		<!-- 选项 END -->
        
          </div>
        </form>
	</div>
	</div>
</div>

						
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				
				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<script src="/oscshop/Common/js/jquery/jquery-2.0.3.min.js"></script>
		<script src="/oscshop/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
			
		<!-- <![endif]-->

		<!--[if IE]>
		<script src="/oscshop/Common/js/jquery/jquery-1.10.2.min.js"></script>
		<script src="/oscshop/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='./Themes/Admin/Public/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="./Themes/Admin/Public/js/bootstrap.min.js"></script>
		<script src="./Themes/Admin/Public/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="./Themes/Admin/Public/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="./Themes/Admin/Public/js/ace-elements.min.js"></script>
		<script src="./Themes/Admin/Public/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="/oscshop/Common/js/oscshop_common.js"></script>
		
<style>
.table thead > tr > td, .table tbody > tr > td {
    vertical-align: middle;
}	
.table thead td span[data-toggle="tooltip"]:after, label.control-label span:after {
	font-family: FontAwesome;
	color: #1E91CF;
	content: "\f059";
	margin-left: 4px;
}
</style>	

<script src="/oscshop/Common/ckeditor/ckeditor.js"></script> 
<script src="/oscshop/Common/fileupload/jquery.ui.widget.js"></script>
<script src="/oscshop/Common/fileupload/jquery.fileupload.js"></script>
<script>
	CKEDITOR.replace('description', {
		filebrowserImageUploadUrl: '<?php echo U("Image/ckupload");?>',	
		toolbar: [
					[ 'Source', 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ],
					[ 'FontSize', 'TextColor', 'BGColor' ],
					[ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Image','Format']
				]	
	});

var option_row = '<?php echo $option_row; ?>';

$('input[name=\'option\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url:'<?php echo U("Option/autocomplete");?>' +'/filter_name/'+  encodeURIComponent(request),
			dataType: 'json',			
			success: function(json) {
				response($.map(json, function(item) {
					return {
						category: item['category'],
						label: item['name'],
						value: item['option_id'],
						type: item['type'],
						option_value: item['option_value']
					}
				}));
			}
		});
	},
	'select': function(item) {
		html  = '<div class="tab-pane" id="tab-option' + option_row + '">';
		html += '	<input type="hidden" name="goods_option[' + option_row + '][goods_option_id]" value="" />';
		html += '	<input type="hidden" name="goods_option[' + option_row + '][name]" value="' + item['label'] + '" />';
		html += '	<input type="hidden" name="goods_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';
		html += '	<input type="hidden" name="goods_option[' + option_row + '][type]" value="' + item['type'] + '" />';
		
		html += '	<div class="form-group">';
		html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">必选</label>';
		html += '	  <div class="col-sm-10"><select name="goods_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';
		html += '	      <option value="1">是</option>';
		html += '	      <option value="0">否</option>';
		html += '	  </select></div>';
		html += '	</div>';
			
		if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox') {		
			
			html += '<div class="table-responsive">';
			html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';
			html += '  	 <thead>'; 
			html += '      <tr>';
			
			if(item['type']!='select'){			
				html += '    <td class="text-right">图片</td>';				
			}else{
				html += '    <td class="text-right"></td>';	
			}	
			
			html += '        <td class="text-left">选项值</td>';			
			html += '        <td class="text-right">商品数量</td>';
			html += '        <td class="text-left">扣减库存</td>';
			html += '        <td class="text-right">销售价格</td>';				
			html += '        <td class="text-right">重  量</td>';					
			html += '        <td></td>';
			html += '      </tr>';
			html += '  	 </thead>';
			html += '  	 <tbody>';
			html += '    </tbody>';
			html += '    <tfoot>';
			html += '      <tr>';
			html += '        <td colspan="6"></td>';
			html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row+",'"+item['type']+"'"+');" data-toggle="tooltip" title="<?php echo $button_option_value_add; ?>" class="btn btn-primary">新增</button></td>';
			html += '      </tr>';
			html += '    </tfoot>';
			html += '  </table>';
			html += '</div>';
			
            html += '  <select id="option-values' + option_row + '" style="display: none;">';
			
            for (i = 0; i < item['option_value'].length; i++) {
				html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';	
			html += '</div>';	
		}
		
		$('#tab-option .tab-content').append(html);
			
		$('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="icon-ban-circle" onclick="$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove(); $(\'#option a:first\').tab(\'show\')"></i> ' + item['label'] + '</li>');
		
		$('#option a[href=\'#tab-option' + option_row + '\']').tab('show');		
				
		option_row++;
	}	
});	
	
var option_value_row = '<?php echo $option_value_row; ?>';

function addOptionValue(option_row,type) {	
	html  = '<tr id="option-value-row' + option_value_row + '">';
	
	if(type=='select'){
		html+='		<td></td>';
	}else{			
		html+= '  <td class="text-left"><a href="#" id="option-image-row' + option_value_row + '"data-toggle="image" num="'+option_value_row+'" type="option" class="img-thumbnail"><img osctype="option_image'+option_value_row+'" src="/oscshop/Common/image/no_image_100x100.jpg" alt="" title="" /><input osctype="option_image_input'+option_value_row+'" type="hidden" name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][option_value_imgae]" value="" id="input-image' + option_value_row + '" /></td>';
	}		
	
	
	html += '  <td class="text-left"><select name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][option_value_id]" class="form-control">';
	html += $('#option-values' + option_row).html();
	html += '  </select><input type="hidden" name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][goods_option_value_id]" value="" /></td>';
	html += '  <td class="text-right"><input type="text" name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][quantity]" value=""  class="form-control" /></td>'; 
	html += '  <td class="text-left"><select name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][subtract]" class="form-control">';
	html += '    <option value="1">是</option>';
	html += '    <option value="0">否</option>';
	html += '  </select></td>';
	html += '  <td class="text-right"><select name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][price_prefix]" class="form-control">';
	html += '    <option value="+">+</option>';
	html += '    <option value="-">-</option>';
	html += '  </select>';
	html += '  <input type="text" name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][price]" value="" placeholder="<?php echo $entry_price; ?>" class="form-control" /></td>';
	
	html += '  <td class="text-right"><select name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';
	html += '    <option value="+">+</option>';
	html += '    <option value="-">-</option>';
	html += '  </select>';	
	html += '  <input type="text" name="goods_option[' + option_row + '][goods_option_value][' + option_value_row + '][weight]" value="" placeholder="<?php echo $entry_weight; ?>" class="form-control" /></td>';
	
	
	
	html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="icon-trash bigger-120"></i></button></td>';
	html += '</tr>';
	
	$('#option-value' + option_row + ' tbody').append(html);
        $('[rel=tooltip]').tooltip();
        
	option_value_row++;
}	
	
$('input[name=\'category\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: '<?php echo U("GoodsCategory/autocomplete");?>' +'/filter_name/'+  encodeURIComponent(request),
			dataType: 'json',			
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['category_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'category\']').val('');
		
		$('#goods-category' + item['value']).remove();
		
		$('#goods-category').append('<div id="goods-category' + item['value'] + '"><i class="icon-ban-circle"></i> ' + item['label'] + '<input type="hidden" name="goods_category[]" value="' + item['value'] + '" /></div>');	
	}
});	
$('#goods-category').delegate('.icon-ban-circle', 'click', function() {
	$(this).parent().remove();
});	
	
	var image_row = '<?php echo $image_row; ?>';

	function addImage() {
		html  = '<tr id="gallery-image-row' + image_row + '">';
		html += '  <td class="text-left"><a href="#" id="thumb-image' + image_row + '"data-toggle="image" type="gallery" num="'+image_row+'" class="img-thumbnail"><img osctype="gallery_image'+image_row+'" src="/oscshop/Common/image/no_image_100x100.jpg" alt="" title="" /><input osctype="gallery_image_input'+image_row+'" type="hidden" name="goods_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';
		html += '  <td class="text-right"><input type="text" name="goods_image[' + image_row + '][sort_order]" value="'+image_row+'" class="form-control" /></td>';
		html += '  <td class="text-left"><button type="button" onclick="$(\'#gallery-image-row' + image_row  + '\').remove();" data-toggle="tooltip" class="btn btn-danger"><i class="icon-trash"></i></button></td>';
		html += '</tr>';
		
		$('#images tbody').append(html);
		
		image_row++;
	}

	var discount_row =<?php echo ((isset($discount_row) && ($discount_row !== ""))?($discount_row):'0'); ?>;

	function addDiscount() {
		html  = '<tr id="discount-row' + discount_row + '">'; 
		html += '  <td class="text-left"><input type="text" name="goods_discount[' + discount_row + '][quantity]" value="" class="form-control" /></td>';
		html += '  <td class="text-left"><input type="text" name="goods_discount[' + discount_row + '][price]" value="" class="form-control" /></td>';
		html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row  + '\').remove();" data-toggle="tooltip" class="btn btn-danger"><i class="icon-trash"></i></button></td>';
		html += '</tr>';
		
		$('#discount tbody').append(html);
		
		discount_row++;
	}
	
$(function(){
	
	<?php if(isset($_GET['id'])): ?>Oscshop.setValue("status", <?php echo ((isset($goods["status"]) && ($goods["status"] !== ""))?($goods["status"]):1); ?>);		
			Oscshop.setValue("subtract",<?php echo ((isset($goods["subtract"]) && ($goods["subtract"] !== ""))?($goods["subtract"]):1); ?>);		
			Oscshop.setValue("shipping",<?php echo ((isset($goods["shipping"]) && ($goods["shipping"] !== ""))?($goods["shipping"]):1); ?>);<?php endif; ?>
	
	
	// tooltips on hover button-upload
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body', html: true});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});	
	
	
	
	$(document).delegate('a[data-toggle=\'image\']', 'click', function(e) {
		e.preventDefault();
		
		var index=$(this).attr('num');
		var type=$(this).attr('type');
		//alert(index);
		
		var element = this;
		
		if(index==undefined){
			$(element).popover({
				html: true,
				placement: 'right',
				trigger: 'manual',
				content: function() {
					return '<button type="button" id="thumb-image"  class="btn btn-primary"><i class="icon-edit"></i></button> <button type="button" id="button-clear" class="btn btn-danger"><i class="icon-trash"></i></button>';
				}
			});
		}else{
			$(element).popover({
				html: true,
				placement: 'right',
				trigger: 'manual',
				content: function() {
					return '<button type="button" n="'+index+'" t="'+type+'"  class="btn btn-primary button-image"><i class="icon-edit"></i></button> <button type="button" id="button-clear" class="btn btn-danger"><i class="icon-trash"></i></button>';
				}
			});
		}
		

		
		$(element).popover('toggle');	
		
		//商品图片
		$('#thumb-image').on('click', function() {
			
			//alert('333');
			
			$('#modal-image').remove();
			
			$('#form-upload').remove();
			
			$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input osctype="btn_upload_image" type="file" name="file" /></form>');
	
			$('#form-upload input[name=\'file\']').trigger('click');
			
			$(element).popover('hide');
			
			$('[osctype="btn_upload_image"]').fileupload({
				
	        	dataType: 'json',
	            url: "<?php echo U('Image/upload_image',array('dir'=>'product'));?>",
	            add: function(e, data) {
	                $parent = $('#thumb');
	                $input = $parent.find('[osctype="image_input"]');
	                $img = $parent.find('[osctype="image"]');
	                data.formData = {old_goods_image:$input.val()};
	                $img.attr('src', "./Themes/Admin/Public/img/loading.gif");
	                data.submit();
	            },
	            done: function (e,data) {
					
	            	var image=data.result;
	            	
	            	
	                $parent = $('#thumb');
	                $input = $parent.find('[osctype="image_input"]');
	                $img = $parent.find('[osctype="image"]');
	                if(image) {
	                   // $img.prev('i').hide();
	                    $img.attr('src', '/oscshop/'+image.image_thumb);
	                    $img.show();
	                    $input.val(image.image);
	                } else {
	                    alert('上传失败');
	                }
	            }
   		 });
		});

			
		//商品相册
		$('.button-image').on('click', function() {
			$('#modal-image').remove();
			
			$('#form-upload').remove();
			
			var i=$(this).attr('n');
			var type=$(this).attr('t');
						
			$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input osctype="btn_upload_image" type="file" name="file" /></form>');
	
			$('#form-upload input[name=\'file\']').trigger('click');
			
			$(element).popover('hide');
			
			$('[osctype="btn_upload_image"]').fileupload({
				
	        	dataType: 'json',
	            url: "<?php echo U('Image/upload_image/dir');?>"+'/'+type,
	            add: function(e, data) {
	                $parent = $('#image-row'+i);
	                $input = $parent.find('[osctype="'+type+'_image_input'+i+'"]');
	                $img = $parent.find('[osctype="'+type+'_image'+i+'"]');
	                var old_name='old_'+type+'_image';
	                data.formData = {old_name:$input.val()};
	                $img.attr('src', "./Themes/Admin/Public/img/loading.gif");
	                data.submit();
	            },
	            done: function (e,data) {
					
	            	var image=data.result;	            	
	            	
	                $parent = $('#'+type+'-image-row'+i);
	                $input = $parent.find('[osctype="'+type+'_image_input'+i+'"]');
	                $img = $parent.find('[osctype="'+type+'_image'+i+'"]');
	                if(image) {
	                   // $img.prev('i').hide();
	                    $img.attr('src', '/oscshop/'+image.image_thumb);
	                    $img.show();
	                    $input.val(image.image);
	                } else {
	                    alert('上传失败');
	                }
	            }
   		 });
			
		});
		

	
		$('#button-clear').on('click', function() {
			$(element).find('img').attr('src', $(element).find('img').attr('data-placeholder'));
			
			$(element).parent().find('input').attr('value', '');
	
			$(element).popover('hide');
		});
	});
});
	$('#option a:first').tab('show');
</script>
		
	</body>
</html>