<?php if (!defined('THINK_PATH')) exit();?><section id="slider_box" class="clearfix">
<link rel="stylesheet" href="/oscshop/Common/widget/slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/oscshop/Common/widget/slider/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="/oscshop/Common/widget/slider/js/jquery.nivo.slider.js" charset="utf-8"></script>
<div class="container">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
				<?php if(is_array($slider)): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["url"]); ?>"><img src="/oscshop/Uploads/image/<?php echo ($v["image"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?> 
            </div>
        </div>
</div>
<script type="text/javascript">
	$(window).load(function() {
	    $('#slider').nivoSlider();
	});
</script>
</section>