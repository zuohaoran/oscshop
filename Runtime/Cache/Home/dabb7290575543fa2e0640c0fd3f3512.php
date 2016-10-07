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
      
<section class="container" id="blog">
	<div class="container">
		<div class="row">
			
			<div class="col-md-9">
				<section class="row">
			        <div class="col-md-12">
				      	<header>
				          <h3><?php echo ($title); ?></h3>
				        </header> 
			        </div>          
			     </section>
			     <section class="col-md-12">
			      
			      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="row">
			      	<article class="post_box"> 
			      		<a href="<?php echo U('/blog/'.$v['blog_id']);?>">
			      		<img src="/oscshop/<?php echo ($v["image"]); ?>" alt="<?php echo ($v["title"]); ?>" class="image_frame_300 img-polaroid"/>
			      		</a>
			          <h2><?php echo ($v["title"]); ?></h2>
			          <p><?php echo ($v["summary"]); ?></p>
			          <a href="<?php echo U('/blog/'.$v['blog_id']);?>" class="btn btn-danger">更多...</a>
			          <div class="cleaner"></div>
			          <div class="post_meta">
			            发表于： <i><?php echo ($v["create_time"]); ?></i> | <a href="#"><i><?php echo ($v["author"]); ?></i></a>
			            <span>( <?php echo ($v["reply"]); ?> 回复 )</span>
			          </div>
			
			        </article>
			      </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
			          <div class="container">
					     	<?php echo ($page); ?>
					  </div>
			   </section>
			</div>
			<?php W('BlogCategory/blog_category_show');?>	
			
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
  
</body>
<html>