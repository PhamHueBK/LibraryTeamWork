<!DOCTYPE html>
<html>
<head>
	<title>HUST LIBRARY</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
		session_start();

		if(isset($_GET['mode'])){
			$mode = $_GET['mode'];
			if(isset($_GET['act'])){
				$act = $_GET['act'];
			}
			else
				$act = 'index';
		}
		else
		{
			$mode = "home";
			$act = "index";
		}

		switch ($mode) {
			case 'reader':
			{
				include_once('Controller/ReaderController.php');
				$controller = new ReaderController();
				switch ($act) {
					case 'login':
					{
						$controller->login();
						break;
					}
					case 'logout':
					{
						$controller->logout();
						break;
					}
					case 'update':
					{
						if(isset($_SESSION['user'])){
							$controller->update();
						}
						break;
					}
					case 'create':
					{
						$controller->create();
						break;
					}
					default:
					{
						if(isset($_SESSION['user']))
							$controller->profile();
						break;
					}
				}
				break;
			}
			case 'post':
			{
				include_once('Controller/PostController.php');
				$controller = new PostController();
				switch ($act) {
					case 'show':
					{
						$controller->show();
						break;
					}
					default:
					{
						$controller->index();
						break;
					}
				}
				break;
			}
			case 'borrow_lend_book':
			{
				include_once('Controller/Borrow_lend_bookController.php');
				$controller = new Borrow_lend_bookController();
				switch ($act) {
					case 'borrow':
					{
						if(isset($_SESSION['user']))
							$controller->borrow();
						else
							echo '<script language="javascript">alert("Bạn cần đăng nhập để thực hiện chức năng này");</script>';
						break;
					}
					case 'borrow_access':
					{
						if(isset($_SESSION['user']))
							$controller->borrow_access();
						else
							echo '<script language="javascript">alert("Bạn cần đăng nhập để thực hiện chức năng này");</script>';
						break;

					}
				}
			}
			case 'book':
			{
				include_once('Controller/BookController.php');
				$controller = new BookController();
				switch ($act) {
					case 'search':
					{
						$controller->index();
						break;
					}
					
					default:
					{
						$controller->index();
						break;
					}
				}
			}
			case 'bookDetail':
			{
				include_once('Controller/BookDetailController.php');
				$controller = new BookDetail();
				switch ($act) {
					case 'show':
					{
						//$controller->show();
						break;
					}
					default:
					{
						$controller->index();
						break;
					}
				}
				
			}
			default:
			{	
				include_once('Controller/HomeController.php');
				$controller = new HomeController();
				switch ($act) {
					case 'service':
					{
						$controller->server();
						break;
					}
					case 'index':
					{
						$controller->index();
						break;
					}
					default:
					{
						$controller->pageChild();
						break;
					}
				}
				
				break;
			}
		}
	?>
</body>
</html>