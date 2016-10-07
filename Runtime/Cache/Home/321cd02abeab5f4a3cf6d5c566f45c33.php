<?php if (!defined('THINK_PATH')) exit();?>
<aside class="col-md-3">
	  <nav class="well">
	    <ul id="blog-category">
	    <?php if(is_array($blog_category)): $i = 0; $__LIST__ = $blog_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="sub"><a href='<?php echo U("/blogc/".$v["id"]);?>'><?php echo ($v["title"]); ?></a></li>
	      <?php if(isset($v['children'])){ ?>
	      <?php foreach($v['children'] as $k1=>$v1){ ?>	
	      <li class="sub-child"><a href='<?php echo U("/blogc/".$v1["id"]);?>'><?php echo $v1['title']; ?></a></li>
	      <?php } ?>
	      <?php } endforeach; endif; else: echo "" ;endif; ?>	
	    </ul>
	  </nav>
	  <section>
	    <h4 class="text-center"><?php echo C('SITE_NAME'); ?></h4>
	    <blockquote class="pull-right">
	    	<p><?php echo C('SITE_SLOGAN'); ?></p>	    	
	      <small><?php echo C('SHORT_URL'); ?></small>
	    </blockquote>
	  </section>
</aside>