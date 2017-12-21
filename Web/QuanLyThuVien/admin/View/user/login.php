<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8"/>
	<link href="View/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php 
		if(!isset($_SESSION['admin']) && isset($_SESSION['isLogin']))
		{
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Cảnh báo: </strong>Email hoặc mật khẩu chưa chính xác</div>';
			unset($_SESSION['isLogin']);
		}
	 ?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="?mode=user&act=loginSuccess" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<legend>Đăng nhập</legend>
				</div>
		
				
				
				<div class="form-group">
					<label>Email <span style="color: red">*</span></label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Your email" required="true">
				</div>
				
				<div class="form-group">
					<label>Password <span style="color: red">*</span></label>
					<input type="password" name="password" class="form-control" id="password" required="true">
				</div>
		
				<div class="form-group">
					<div>
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</div>
				</div>
		</form>
	</div>
</body>
</html>