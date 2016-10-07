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
      

<section class="container" id="page_content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<section class="row">
			        <div class="col-md-12">
			         <h3>关于我们</h3>
			         <p class="lead muted">本公司专做手拉坯，建盏，全系列天目釉，铁釉，铜釉，结晶釉产品，柴烧系列产品，个性化，高端化，私杯，针对客户，为收藏级个性产品等。</p>
			         <p>陶瓷艺术是中国优秀文化之中的重要组成部分，它是我国民族的宝贵财富。中国瓷器，从隋唐时期便开始向外域流传，宋、元、明、清各代，瓷器都作为重要商品行销全国，走向世界，陶瓷艺术装饰品作为商品在流通的同时，也在不断地传播中国的陶瓷文化，促进了中国文化发展，所以中国素有“瓷国”之称，誉满全球。制瓷工艺代代都有传承和创新，中国生产的各具特色的陶瓷，对满足人民的生活和审美需要，及对外经济、文化交流都起着重要作用。</p>
			       </div>          
			     </section>
			     <section>
			      <div class="row">
			        <div class="col-md-12">
			          <h3>我们的团队成员</h3>
			        </div> 
			      </div>
			      <div class="row">
			       <div class="col-md-3 text-center">
			         <img src="/oscshop/Themes/Home/default/Public/image/u1.jpg" class="img-thumbnail" alt="Chief Designer">
			         <h6 class="text-center">李德涌</h6>
			       </div>
			       <div class="col-md-9">
			       	<div class="h"></div>
			         <p class="fz"><?php echo C('SITE_NAME'); ?> 陶瓷工艺美术师，从事陶瓷艺术相关的设计、制作和研究。陶瓷选材、制坯、配釉、烧窑，精于陶瓷的整个制作流程。从事陶瓷设计制作工作多年，积累了丰富经验。 </p>
			         
			       </div>
			     </div>
			     
			     <div class="row">
			       <div class="col-md-3 text-center">
			         <img src="/oscshop/Themes/Home/default/Public/image/u2.jpg" class="img-thumbnail" alt="Fashion Designer">
			         <h6>李梓钿</h6>
			       </div>
			       <div class="col-md-9">
			       	<div class="h"></div>
			         <p class="fz"><?php echo C('SITE_NAME'); ?> 高级软件开发工程师，精于网站的设计、开发，网站的运营，手机APP制作。负责网站、网络营销方案的制定。有多年的软件开发、网站运营经验。			         	
			         </p>
			         
			       </div>
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