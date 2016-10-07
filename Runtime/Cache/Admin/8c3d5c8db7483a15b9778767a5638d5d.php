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
						
							
	<link rel="stylesheet" href="./Themes/Admin/Public/css/dialog.css" />	
	
	
	<div class="ks-ext-mask" style="position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 999; display:none"></div>
	<div id="dialog" class="dialog" style="z-index: 9999; display:none">
    <div class="ks-contentbox">
      <div class="title"><span>新增分类</span><a class="ks-ext-close" href="javascript:void(0)">X</a></div>
      <input type="hidden" name="action" value="" />	
    	
   
        <dl>
        	<dt>分类名称</dt>
        	<dd><input type="text" name="name" class="text" /></dd>
        	<dt>meta关键字</dt>
        	<dd><input type="text" name="meta_keyword" class="text w400" /></dd>
        	<dt>meta描述</dt>
        	<dd><textarea name="meta_description" class="text h50 w400"></textarea></dd>
        	<dt>排序</dt>
        	<dd><input type="text" name="sort_order" class="text" /></dd>
        </dl>
        
        
        <div class="J_DefaultMessage"></div>
        <div class="bottom">
        	 <a href="javascript:void(0);" class="J_SubmitPL ncsc-btn ncsc-btn-green">确认</a> 
        	 <a href="javascript:void(0);" class="J_Cancel ncsc-btn">取消</a> </div>
      
    </div>
  </div>  
	

	<div class="page-header">
	<a id="addParent" class="btn btn-primary">新增</a>
	<a id="edit" class="btn btn-primary">编辑</a>
	<a id="remove" class="btn btn-primary">删除</a>
	</div>
	
	<div class="row">
		<div id="category_tree" class="ztree"></div>
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
		
<script src="/oscshop/Common/ztree/jquery.ztree.all-3.5.min.js"></script>
<link  rel="stylesheet" type="text/css" href="/oscshop/Common/ztree/zTreeStyle.css" />
<link  rel="stylesheet" type="text/css" href="/oscshop/Common/ztree/demo.css" />	

<script>
$(function(){

	
	$('.J_SubmitPL').click(function(e){    	
    	//$('#alert').css({'display':'none'});
    	$("#dialog").css('display','none');
		$('.ks-ext-mask').css('display','none');
		
    	var zTree = $.fn.zTree.getZTreeObj("category_tree"),
		
			nodes = zTree.getSelectedNodes(),
			treeNode = nodes[0];
			
			if(treeNode!=undefined){
				var isp= nodes[0].isParent;
			}else{
				var isp= true;
			}
			
			
			var id=(treeNode==undefined?0:treeNode.id);
			
			var url;
			
			if($("input[name='action']").val()=='add'){
				url='<?php echo U("GoodsCategory/add");?>';
			}else if($("input[name='action']").val()=='edit'){
				url='<?php echo U("GoodsCategory/edit");?>';
			}
		
			$.post(
				url,
				{					
					'id':id,
					'name':$("input[name='name']").val(),
					'meta_keyword':$("input[name='meta_keyword']").val(),
					'meta_description':$("textarea[name='meta_description']").val(),	
					'sort_order':$("input[name='sort_order']").val()				
				},
				function(d){			
					if($("input[name='action']").val()=='add'){						
											
						//有父节点
				    	if(treeNode){
				    		treeNode = zTree.addNodes(treeNode, {id:d.id, pId:id, isParent:isp, name:d.name});
				    	}else{
				    		treeNode = zTree.addNodes(treeNode, {id:d.id, pId:0, isParent:isp, name:d.name});
				    	}	
					}else{
						
						if(d.success){
							nodes[0].name = d.name;
							zTree.updateNode(nodes[0]);
						}
						if(d.err){
							alert(d.err);
						}
						
						
					}
					
				}
			);
    	
    });
	
});
</script>

<script>

		var setting = {
			view: {
				addHoverDom: false,
				removeHoverDom: false,
				selectedMulti: false
			},
			edit: {
				enable: true,
				editNameSelectAll: true,
				showRemoveBtn: false,
				showRenameBtn: false
			},
			data: {
				simpleData: {
					enable: true
				}
			}
		};

	
	var zNodes =<?php echo ($list); ?>;
	
	function add(e) {

		$("input[name='action']").val('add');
		$('.title').find('span').text('新增分类');	
		$("#dialog").css({'position' : 'fixed','display' : 'block', 'z-index' : '9999'});
		
	}
	function edit() {
			$("input[name='action']").val('edit');
			
			var zTree = $.fn.zTree.getZTreeObj("category_tree"),
			nodes = zTree.getSelectedNodes(),
			treeNode = nodes[0];
			if (nodes.length == 0) {
				alert("请先选择一个节点");
				return;
			}else{
				var id=treeNode.id;
				$.post(
				'<?php echo U("GoodsCategory/get_info");?>',
				{					
					'id':id,
					
				},
				function(d){			
					$("input[name='name']").val(d.name);
					$("input[name='meta_keyword']").val(d.meta_keyword);
					$("input[name='sort_order']").val(d.sort_order);
					$("textarea[name='meta_description']").val(d.meta_description);
				}
			);
				$('.title').find('span').text('编辑分类');	
				$("#dialog").css({'position' : 'fixed','display' : 'block', 'z-index' : '9999'});
				
				
				
			}
	}
	function remove(e) {
		if(!confirm('确认要删除吗！！')){
				return false;
			}
			
			var zTree = $.fn.zTree.getZTreeObj("category_tree"),
			nodes = zTree.getSelectedNodes(),
			treeNode = nodes[0];
			if (nodes.length == 0) {
				alert("请先选择一个节点");
				return;
			}
			$.post(
				'<?php echo U("GoodsCategory/del");?>',
				{					
					'id':treeNode.id,					
				},
				function(d){			
					if(d.err){
						alert(d.err);
					}else{						
						zTree.removeNode(treeNode);
					}
					
					
				}
			);
	}
	
		$(document).ready(function(){
			$.fn.zTree.init($("#category_tree"), setting, zNodes);
			$("#addParent").bind("click", {isParent:true}, add);
			$("#edit").bind("click", edit);
			$("#remove").bind("click", remove);
			
			//关闭弹出层
			$('#dialog').on('click','.ks-ext-close',function(){	
			    $("#dialog").css('display','none');
			    $('.ks-ext-mask').css('display','none');
			    return false;
			});
			//关闭弹出层
			$('#dialog').on('click','.J_Cancel',function(){	
			    $("#dialog").css('display','none');
			    $('.ks-ext-mask').css('display','none');
			    return false;
			});
			
			
		});
	
</script>
		
	</body>
</html>