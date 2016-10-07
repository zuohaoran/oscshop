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
		</h1>
	</div>	
	<ul class="nav nav-tabs">
		
	  <li class="active"><a href="#tab-order" data-toggle="tab">订单详情</a></li>
	 
	  <li><a href="#tab-shipping" data-toggle="tab">收货地址</a></li>
	 
	  <li><a href="#tab-product" data-toggle="tab">商品清单</a></li>
	  
	  <li><a href="#tab-history" data-toggle="tab">订单历史</a></li>          
	  
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-order">
			<table class="table table-bordered">
				<tr>
				    <td>订单ID</td>
				    <td><?php echo ($data["order"]["order_id"]); ?></td>
				</tr>
				<tr>
					<td>订单编号</td>
					<td><?php echo ($data["order"]["order_num_alias"]); ?></td>
				</tr>
				<tr>
					<td>会员名称</td>
					<td><?php echo ($data["order"]["uname"]); ?></td>
				</tr>
				<tr>
				    <td>电子邮件</td>
				    <td><?php echo ($data["order"]["email"]); ?></td>
				</tr>
				  <tr>
				    <td>联系电话</td>
				    <td><?php echo ($data["order"]["telephone"]); ?></td>
				</tr> 
				<tr>
				    <td>合计金额</td>
				    <td>
				    	￥<?php echo ($data["order"]["total"]); ?>
				    </td>
				</tr>
				<tr>
				    <td>订单状态</td>
				    <td id="order-status"><?php echo ($data["order"]["name"]); ?></td>
				</tr>     
				<tr>
					<td>IP地址</td>
					<td><?php echo ($data["order"]["ip_region"]); ?></td>
				</tr>  
				<tr>
					<td>用户系统</td>
					<td><?php echo ($data["order"]["user_agent"]); ?></td>
				</tr>
				<tr>
					<td>下单时间</td>
					<td><?php echo (toDate($data["order"]["date_added"],'Y/m/d H:i:s')); ?></td>
				</tr>
				<tr>
					<td>修改时间</td>
					<td><?php echo (toDate($data["order"]["date_modified"],'Y/m/d H:i:s')); ?></td>
				</tr>
				</table>
		</div>
		<div class="tab-pane" id="tab-shipping">
            <table class="table table-bordered">
          <tr>
            <td>收货人姓名</td>
            <td><?php echo ($data["order"]["shipping_name"]); ?></td>
          </tr>
                  
          <tr>
            <td>所在地</td>
            <td>
            	<?php echo get_area_name($data['order']['shipping_province_id']); ?>，
            	<?php echo get_area_name($data['order']['shipping_city_id']); ?>，
            	<?php echo get_area_name($data['order']['shipping_country_id']); ?>
            </td>
          </tr>
          
          <tr>
            <td>地址</td>
            <td><?php echo ($data["order"]["address"]); ?></td>
          </tr>
         
          <tr>
            <td>支付方式</td>
            <td><?php echo get_payment_name($data['order']['payment_code']); ?></td>
          </tr>
           <tr>
          	<td>货运方式</td>
          	<td><?php echo get_shipping_name($data['order']['shipping_method']); ?></td>
          </tr>
          <tr>
          	<td>联系电话</td>
          	<td><?php echo ($data["order"]["shipping_tel"]); ?></td>
          </tr>
          
        </table>
		
         
        
      </div>
      <div id="tab-product" class="tab-pane">
       <table class="table table-bordered">
          <thead>
            <tr>
              <td class="left">商品品名</td>
              <td class="left">型号</td>
              <td class="right">数量</td>
              <td class="right">价格</td>
              <td class="right">总计</td>
            </tr>
          </thead>
          <tbody>
          	<?php if(isset($data['order_product'])&&is_array($data['order_product'])){ ?>
	            <?php foreach ($data['order_product'] as $product) { ?>
	            <tr>
	              <td class="left">
	              	<a href="<?php echo U('Goods/edit',array('id'=>$product['goods_id']));?>"><?php echo $product['name']; ?></a>
	              	<?php if($option_list=M()->query('select * from '.C('DB_PREFIX').'order_option where order_goods_id='.$product['order_goods_id'].' and order_id='.$product['order_id'])){ ?>
					<?php foreach ($option_list as $option) { ?>
	                <br />
	                &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
	                <?php } ?>
	                <?php } ?>
	              </td>
	              <td class="left"><?php echo $product['model']; ?></td>
	              <td class="right"><?php echo $product['quantity']; ?></td>
	              <td class="right">￥<?php echo $product['price']; ?></td>
	              <td class="right">￥<?php echo $product['total']; ?></td>
	            </tr>
	            <?php } ?>
            <?php } ?>
    
          </tbody>
          <?php if(isset($data['order_total'])&&is_array($data['order_total'])){ ?>
	          <?php foreach ($data['order_total'] as $totals) { ?>
	          <tbody id="totals">
	            <tr>
	              <td colspan="4" class="right"><?php echo $totals['title']; ?>:</td>
	              <td class="right"><?php echo $totals['text']; ?></td>
	            </tr>
	          </tbody>
	          <?php } ?>
          <?php } ?>
        </table>
  
      </div>
	
	
		 <div id="tab-history" class="tab-pane">
        <div id="history"></div>
        <table class="table table-bordered">
          <tr>
            <td>订单状态</td>
            <td>
              <input type="hidden" name="old_order_status_id" value="<?php echo ($data["order"]["order_status_id"]); ?>" id="old_order_status_id" />
              <select name="order_status_id">
                <?php foreach ($data['order_statuses'] as $order_statuses) { ?>
                	
                 <option value="<?php echo $order_statuses['order_status_id']; ?>" <?php if ($order_statuses['order_status_id'] == $data['order']['order_status_id']) { echo ' selected="selected"'; }?> ><?php echo $order_statuses['name']; ?></option>
               
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>通知会员</td>
            <td><input type="checkbox" checked="checked" name="notify" value="1" /></td>
          </tr>
          <tr>
            <td>订单附言</td>
            <td><textarea name="comment" cols="40" rows="8" style="width: 99%"></textarea>
            </td>
           </tr>
           <tr>
           	<td colspan="2">
          <div class="text-right">
			<button id="button-history" class="btn btn-primary" data-loading-text="Loading...">
			<i class="fa fa-plus-circle"></i>
			添加订单记录
			</button>
		  </div>
		  </td>
          </tr>
        </table>
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
		
<script>	
$('#history').load('<?php echo U("Order/history",array("id"=>I("id"))); ?>');
$('#button-history').live('click', function() {

	$.ajax({
		url: '<?php echo U("Order/history",array("id"=>I("id"))); ?>',
		type: 'post',
		dataType: 'html',
		data: 'order_status_id=' + encodeURIComponent($('select[name=\'order_status_id\']').val()) + '&notify=' + encodeURIComponent($('input[name=\'notify\']').attr('checked') ? 1 : 0)  + '&comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),
		beforeSend: function() {
			$('.success, .warning').remove();
			$('#button-history').attr('disabled', true);
			$('#history').prepend('<div class="attention"><img src="./Themes/Admin/Public/img/loading.gif" alt="" />加载中...</div>');
		},
		complete: function() {
			$('#button-history').attr('disabled', false);
			$('.attention').remove();
		},
		success: function(html) {
			$('#history').html(html);
			
			$('textarea[name=\'comment\']').val('');
			
			$('#order-status').html($('select[name=\'order_status_id\'] option:selected').text());
		}
	});
});
</script>
		
	</body>
</html>