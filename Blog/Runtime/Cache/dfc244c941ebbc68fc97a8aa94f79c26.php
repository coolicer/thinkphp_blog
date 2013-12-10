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
			<div class="col-md-3">
	<div class="panel panel-default">
	  <div class="panel-heading">基本功能</div>
	  <div class="panel-body">
	    <ul>
	    	<li><a href="/User/posts">所有文章</a></li>
	    	<li><a href="/User/post">发表文章</a></li>				    	
	    	<li><a href="/User/upload">上传附件</a></li>
	    </ul>
	  </div>
	</div>
</div>
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">
				    	<ol class="breadcrumb" style="margin-bottom: 0;">
						  <li>我的博客</li>						 
						  <li class="active"><a href="">发表文章</a></li>
						</ol>
				    </h3>
				  </div>
				  <div class="panel-body">
				   	 <form action="/User/post" method="post">
				   	  <p class="title"><input type="text" class="form-control" name="title" placeholder="输入标题"></p>
				   	  <p class="post-content">
				   	  	<textarea class="form-control" name="content" rows="25" placeholder="输入文章内容..."></textarea>
				   	  </p>
				   	  <p class="tag">
				   	  	<input type="text" name="tag" class="form-control" placeholder="输入标签">
				   	  </p>
				   	   <button type="submit" class="btn btn-default">发表</button>
				   	   <input type="hidden" name="posting" value="posting" />
				   	 </form>
				  </div>
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