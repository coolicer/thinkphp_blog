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
						  <li class="active"><a href="">上传</a></li>
						</ol>
				    </h3>
				  </div>
				  <div class="panel-body">
				      <form action="/User/upload" method="post" enctype="multipart/form-data" id="form"> 
				      	<input type='file'  name='photo[]'>
		      			<button type="button" class="btn btn-sm" id="addFileInput">还要上传</button>						
						<div class="row" style="margin-top:30px;">
							<div class="col-md-4 col-md-offset-5">
								<button type="submit" class="btn btn-default">上传</button>
							</div>
						</div>
						<input type="hidden" name="uploading" value="uploading">
				      </form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	(function(){
		document.getElementById('addFileInput').onclick = function(){
			var form = document.getElementById('form');
			var input = document.createElement('input');
				input.type = 'file';
				input.name = 'photo[]';
			form.insertBefore(input, this);
		}
	})();
</script>
	<div id="footer">
		<div class="container"><p class="text-center">copyright all right &copy; reserve</p></div>
	</div>
</body>
</html>