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
		    <div class="col-md-10 col-md-offset-1">
		    	<h2><?php echo ($post["title"]); ?></h2>
		    	<p><?php echo ($post["content"]); ?></p>
		    	<p>标签：<?php echo ($post["tag"]); ?></p>
		    <p>
		    	<?php if((empty($before))): ?><span>没有了</span>
		    		<?php else: ?> <a href="/User/view/id/<?php echo ($before['id']); ?>">上一篇</a><?php endif; ?>
		    	<?php if((empty($after))): ?><span>没有了</span>
		    		<?php else: ?> <a href="/User/view/id/<?php echo ($after['id']); ?>">下一篇</a><?php endif; ?>
		    </p>
		    </div>
		</div>
	</div>
</div>
	<div id="footer">
		<div class="container"><p class="text-center">copyright all right &copy; reserve</p></div>
	</div>
</body>
</html>