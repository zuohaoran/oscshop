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
 
 <link href="/oscshop/Themes/Home/default/Public/css/login.css" rel="stylesheet" type="text/css">	

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
  
<section id="content-container">
<div class="container">
	<div class="row">

		<?php if(isset($error)) { ?>		
			<div class="alert alert-danger" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <div id="fail"><?php echo $error; ?></div>
			</div>		
		<?php } ?>
		<div id="content" class="col-md-24 col-sm-24 col-xs-24">
			<h1>注册用户</h1>
			<form class="register" method="post" action="<?php echo U('/register');?>">
				<div class="left">
					<h2 class="first">请填写您的帐号资料</h2>
					<div class="content">
						<table class="form">
				        <tr>
				          <td>用户名<span class="required">*</span></td>
						</tr>
						
						<tr>
				          <td><input class="form-control" type="text" name="uname" value="<?php echo ($uname); ?>" />
				            <?php if ($error_uname) { ?>
				            <span class="error"><?php echo $error_uname; ?></span>
				            <?php } ?></td>
				        </tr>
						<tr>
							<td>邮箱<span class="required">*</span></td>
						</tr>
						<tr>
				          <td><input class="form-control" type="text" name="email" value="<?php echo ($email); ?>" />
				            <?php if ($error_email) { ?>
				            <span class="error"><?php echo $error_email; ?></span>
				            <?php } ?></td>
				        </tr>
				        
				        <tr>
							<td>密码<span class="required">*</span></td>
						</tr>
						<tr>
				          <td><input class="form-control" type="password" name="pwd" value="<?php echo ($pwd); ?>" />
				            <?php if ($error_pwd) { ?>
				            <span class="error"><?php echo $error_pwd; ?></span>
				            <?php } ?></td>
				        </tr>
				        <tr>
							<td>确认密码<span class="required">*</span></td>
						</tr>
						<tr>
				          <td><input class="form-control" type="password" name="repwd" value="<?php echo ($repwd); ?>" />
				            <?php if ($error_repwd) { ?>
				            <span class="error"><?php echo $error_repwd; ?></span>
				            <?php } ?></td>
				        </tr>
				        <tr>
							<td>验证码<span class="required">*</span></td>
						</tr>
						<tr>
				          <td><input class="form-control" type="text" name="code" />
				            <?php if ($error_code) { ?>
				            <span class="error"><?php echo $error_code; ?></span>
				            <?php } ?></td>
				        </tr>
				        <tr>
							<td><img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('Public/verify');?>"></td>
						</tr>

				        
						</table>
						    <div class="buttons">
						      <div class="left">
						        <input type="submit" value="提交" class="btn btn-primary btn-continue" />
						      </div>
						    </div>
					</div>
					
				</div>				
			</form>
		</div>
		
	</div>	
</div>	
</section>
<style>
	.verifyimg{cursor:pointer;}
</style>
<script>
	//刷新验证码
	var verifyimg = $(".verifyimg").attr("src");
    $(".reloadverify").click(function(){
        if( verifyimg.indexOf('?')>0){
            $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
        }else{
            $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });	
</script>
  
  <footer>
    <div class="container">        
 
      <div class="credit">
        <p id="templatemo_cr_bar">
          Copyright © 2015 <a id="ypc" href=<?php echo C('SITE_URL'); ?>><?php echo C('SITE_NAME'); ?></a> <a id="bei" target="_blank" href="http://www.miitbeian.gov.cn"><?php echo C('SITE_ICP'); ?></a>
        </p>
      </div>
    </div>
  </footer>   
  
</body>
<html>