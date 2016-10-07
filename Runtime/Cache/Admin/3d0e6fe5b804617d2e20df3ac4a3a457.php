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
						
							
<link rel="stylesheet" href="./Themes/Admin/Public/css/index.css" />	

<div class="row">
	<div class="col-xs-12">	
		    <div class="row">
		      <div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
						<div class="tile-heading">
							今日订单
							<span class="pull-right"> 总<?php echo ($total_order); ?>单</span>
						</div>
						<div class="tile-body">
							<i class="fa icon-shopping-cart"></i>
							<h2 class="pull-right"><?php echo ($today_order); ?></h2>
						</div>
						<div class="tile-footer">
							<a href="<?php echo U('Order/index');?>">显示详细...</a>
						</div>
					</div>
			  </div>
		      <div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
					<div class="tile-heading">
					今日销售额 
					<span class="pull-right"> 总<?php echo ($total_money); ?> </span>
					</div>
					<div class="tile-body">
					<i class="fa icon-credit-card"></i>
					<h2 class="pull-right"><?php echo ($today_money); ?></h2>
					</div>
					<div class="tile-footer">
					<a href="<?php echo U('Order/index');?>">显示详细...</a>
					</div>
					</div> 	
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
					<div class="tile-heading">
					新增客户 
					<span class="pull-right"> 总<?php echo ((isset($total_member) && ($total_member !== ""))?($total_member):'0'); ?>个</span>
					</div>
					<div class="tile-body">
					<i class="fa icon-user"></i>
					<h2 class="pull-right"><?php echo ((isset($today_member) && ($today_member !== ""))?($today_member):'0'); ?></h2>
					</div>
					<div class="tile-footer">
					<a href="<?php echo U('Member/index');?>">显示详细...</a>
					</div>
					</div>
			  </div>
		      <div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
					<div class="tile-heading">今日访问IP数
					<span class="pull-right"> 总<?php echo ((isset($total_ip) && ($total_ip !== ""))?($total_ip):'0'); ?>个</span>	
					</div>
					<div class="tile-body">
					<i class="fa icon-eye-open"></i>
					<h2 class="pull-right"><?php echo ((isset($today_ip) && ($today_ip !== ""))?($today_ip):'0'); ?>个</h2>
					</div>
					<div class="tile-footer">
					<a href="<?php echo U('Statistics/show_ip',array('type'=>'today'));?>">显示详细...</a>
					</div>
					</div>	  
			  </div>
		    </div>
		    <div class="row">
		      <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
				  	<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">
					<i class="fa icon-calendar"></i>
					用户行为
					<a style="font-size: 14px" href="<?php echo U('UserAction/index');?>" class="pull-right">更多..</a>
					</h3>
					</div>
					<ul class="list-group">
						
						<?php if(is_array($uc_list)): $i = 0; $__LIST__ = $uc_list;if( count($__LIST__)==0 ) : echo "$uc_empty" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="list-group-item">
						<?php if($v['type'] == '网站会员' ): ?><a href='<?php echo U("Member/info",array("id"=>$v["user_id"]));?>'><?php echo ($v["uname"]); ?></a>
						<?php else: ?> 
						<a href='<?php echo U("AdminUser/info",array("id"=>$v["user_id"]));?>'><?php echo ($v["uname"]); ?></a><?php endif; ?>
						<?php echo ($v["info"]); ?>
						<br>
						<small class="text-muted">						
						<?php echo ($v["add_time"]); ?>
						</small>
						</li><?php endforeach; endif; else: echo "$uc_empty" ;endif; ?>
					</ul>
					</div>
			  </div>
		      <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12">
		      	<div class="panel panel-default">
		      		<div class="panel-heading">
						<h3 class="panel-title">
						<i class="fa icon-shopping-cart"></i>
						最新订单
						<a style="font-size: 14px" href="<?php echo U('Order/index');?>" class="pull-right">更多..</a>
						</h3>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
							<td>订单号</td>
							<td>客户名称</td>
							<td>状态</td>
							<td>生成日期</td>
							<td>金额</td>
							<td>操作</td>
							</tr>
							</thead>
							<tbody>
								
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($v["order_num_alias"]); ?></td>
							<td><?php echo ($v["uname"]); ?></td>
							<td><?php echo ($v["name"]); ?></td>
							<td>
								<?php echo date('Y-m-d H:i:s',$v['date_added']); ?>
							</td>
							<td><?php echo ($v["total"]); ?></td>
							<td>
								<a  class="btn btn-info" href='<?php echo U("Order/show_order",array("id"=>$v["order_id"]));?>'>
									<i class="icon-eye-open fa"></i>
								</a> 
								
							</td>
						</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>	
							</tbody>
						</table>
						
					</div>
		      	</div>
			  </div>
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
		
								
				
	</body>
</html>