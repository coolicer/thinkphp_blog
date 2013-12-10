<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="__PUBLIC__/Tpl/Public/stylesheet/bootstrap.css">
	<link rel="stylesheet" href="__PUBLIC__/Tpl/Public/stylesheet/main.css">
	<link rel="stylesheet" href="__PUBLIC__/Tpl/Public/stylesheet/page.css">

</head>
<body>
	<div id="header" class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">		
		<div class="container">
			<div class="collapse navbar-collapse bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/">首页</a></li>
					<?php if($user): ?><li><a href="/Sign/signout">退出</a></li>										
						<?php else: ?>
						<li><a href="/Sign/signin">登录</a></li>
						<li><a href="/Sign/signup">注册</a></li><?php endif; ?>
				</ul>
				<?php if($user): ?><ul class="nav navbar-nav navbar-right">
						<li><a href="/User/index">你好：<?php echo ucwords($user);?></a></li>
					</ul><?php endif; ?>
			</div>
		</div>		
	</div>	
<div class="main">
	<div class="container">	
		<div class="row">	
			<h3>文章列表：</h3>		
			<?php if(is_array($posts)): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row" style="margin-bottom:10px;">
					<div class="col-md-8">
						<a href="/User/view/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a> <span class="author">[<?php echo ($vo["author"]); ?>]</span>
					</div>
					<div class="col-md-3 col-md-offset-1 text-right">
						<span class="time"><?php echo ($vo["create_time"]); ?></span>
					</div>	
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-4"><div class="pagination"><?php echo ($page); ?></div></div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div id="footer">
		<div class="container"><p class="text-center">copyright all right &copy; reserve</p></div>
	</div>
</body>
</html>