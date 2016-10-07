<?php if (!defined('THINK_PATH')) exit(); if (isset($error_warning)) { ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php } ?>

<p>选择支付方式</p>
<table class="radio">
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$payment): $mod = ($i % 2 );++$i;?><tr class="highlight">
    <td>    	
      <input type="radio" name="payment_method" value="<?php echo ($payment["payment_code"]); ?>" checked="checked" />    
      </td>
    <td><label><?php echo ($payment["payment_name"]); ?></label></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>	
</table>
<br />


<br />

<div class="buttons">
  <div class="left">
    <input type="button" value="继续" id="button-payment-method" class="btn btn-primary btn-continue" />
  </div>
</div>