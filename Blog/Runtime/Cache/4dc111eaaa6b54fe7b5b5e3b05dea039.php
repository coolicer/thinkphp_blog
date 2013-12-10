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
			<div class="col-md-4 col-md-offset-4">
				<form role="form" action="/Sign/signup" method="post">
				  <div class="form-group">
				    <label for="userName">User name</label>
				    <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter username">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password</label>
				    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
				  </div>	
				  <div class="form-group">
				    <label for="repwd">Re-Password</label>
				    <input type="password" class="form-control" id="repwd" name="repwd" placeholder="type again">
				  </div>
				  <div class="row">				  
				  	<div class="col-md-2 col-md-offset-5"><button type="submit" class="btn btn-default">注册</button></div>				
				  </div>  				  
				</form>
			</div>
		
		</div>
	</div>
</div>
	<div id="footer">
		<div class="container"><p class="text-center">copyright all right &copy; reserve</p></div>
	</div>
</body>
</html>