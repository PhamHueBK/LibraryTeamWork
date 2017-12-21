<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>HUST Library</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="View/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="View/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="View/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="View/css/swipebox.css">
<link rel="stylesheet" href="View/css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="View/css/style1.css" rel="stylesheet">
<link href="View/css/style2.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="View/css/style3.css">
<link href="View/css/toastr.min.css" rel="stylesheet"/>
<link href="View/css/sweetalert.css" rel="stylesheet"/>
<link href="View/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="View/css/dataTables.responsive.css" rel="stylesheet">
<script type="text/javascript" src="View/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="View/js/bootstrap.js"></script> 
<script src="View/js/toastr.min.js"></script>
<script src="View/js/sweetalert.min.js"></script>
<script src="View/js/jquery.dataTables.min.js"></script>
<script src="View/js/dataTables.bootstrap.min.js"></script>
<script src="View/js/dataTables.responsive.js"></script>
<!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<?php 
	if(!isset($_SESSION['user']) && isset($_SESSION['isLogin']))
	{
		echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Cảnh báo: </strong>Email hoặc mật khẩu chưa chính xác</div>';
		unset($_SESSION['isLogin']);
	}
	if(isset($_SESSION['isUpdate']))
	{
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Thông báo: </strong>Cập nhật thông tin thành công</div>';
		unset($_SESSION['isUpdate']);
	}
	if(isset($_SESSION['isSiunUp'])){
		if($_SESSION['isSiunUp'])
			echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Thông báo: </strong>Tạo mới tài khoản thành công, mời đăng nhập</div>';
		else
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Thông báo: </strong>Tạo mới tài khoản không thành công, mời thao tác lại</div>';
		unset($_SESSION['isSiunUp']);
	}
 ?>
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.html"><i class="fa fa-leanpub" aria-hidden="true"></i> HUST Library</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form>
			</div>
			<ul class="agile_forms">
				<?php 
					if(!isset($_SESSION['user'])){
				?>
				<li><a class="active" href="#" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
				<li><a href="#" data-toggle="modal" data-target="#signup"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>
				<?php 
					}else{
				?>
				<li><a class="active" href="?mode=reader&act=profile"><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo $_SESSION['user']['tenBanDoc']; ?></a> </li>
				<li><a href="?mode=reader&act=logout&id=<?php echo $_SESSION['user']['maBanDoc']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Logout</a> </li>
				<?php } ?>
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="<?php if(!isset($_GET['act']) || (isset($_GET['act']) && isset($_GET['mode']) && $_GET['mode'] == "home" && $_GET['act'] == "index")) echo "active"; ?>"><a href="?mode=home&act=index" class="effect-3">Trang chủ</a></li>
						<li class="effect-3 <?php if(isset($_GET['act']) && isset($_GET['mode']) && $_GET['mode'] == "post" && $_GET['act'] == "index") echo "active"; ?>"><a href="?mode=post&act=index">Thông báo</a></li>
						<li class="effect-3 <?php if(isset($_GET['act']) && isset($_GET['mode']) && $_GET['mode'] == "home" && $_GET['act'] == "service") echo "active"; ?>"><a href="?mode=home&act=service">Sản phẩm - Dịch vụ</a></li>
						<li class="effect-3 <?php if(isset($_GET['act']) && isset($_GET['mode']) && $_GET['mode'] == "book" && $_GET['act'] == "search") echo "active"; ?>"><a href="?mode=book&act=search">Tra cứu</a></li>
						<li class="effect-3 <?php if(isset($_GET['act']) && isset($_GET['mode']) && $_GET['mode'] == "book" && $_GET['act'] == "index") echo "active"; ?>"><a href="?mode=book&act=index">Mượn sách</a></li>
						<li class="effect-3"><a href="#mail">Liên hệ</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		
		<div class="clearfix"> </div> 
	</div>
</div>

<!-- //banner -->