<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>安装</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- zui -->
    <link href="/oscshop/Themes/Install/default/Public/css/zui.css" rel="stylesheet">
    <script src="/oscshop/Common/js/jquery/jquery-1.10.2.min.js"></script>
</head>

<body style="background:  rgb(230, 234, 234)">
<div class="container" style="background: white;margin-top: 50px;margin-bottom: 50px;width:800px">
    <div class="with-padding row">
        <ul class="nav nav-secondary">
            
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li class="active"><a href="javascript:;">环境检测</a></li>
    <li class="active"><a href="javascript:;">创建数据库</a></li>
    <li class="active"><a href="javascript:;">安装</a></li>
    <li class="active"><a href="javascript:;">完成</a></li>

        </ul>
        <div>

        </div>
        <div class="article">
            
    <h1>完成</h1>
    <p>安装完成！</p>
	<?php if(isset($info)): echo ($info); endif; ?>


            <div>
                
    <a class="btn btn-primary btn-primary btn-block btn-large" target="_blank" href="./admin.php">登录后台</a>
    <a class="btn btn-success btn-block btn-large" target="_blank" href="/oscshop/">访问首页</a>

            </div>
        </div>
    </div>
    <style>
        body{
            font-family: Arial, "Microsoft Yahei",'新宋体';
        }
    </style>

</div>

</body>
</html>