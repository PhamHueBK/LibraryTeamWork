<!DOCTYPE html>
<html>
<head>
	<title>HUST LIBRARY</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php 
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
				include_once('Controller/ReaderController');
				$controller = new ReaderController();
				switch ($act) {
					case 'login':
					{
						$controller->login();
						break;
					}
					case 'loginSuccess':
					{
						$controller->loginSuccess();
						break;
					}
					case 'logout':
					{
						$controller->logout();
						break;
					}
					case 'edit':
					{
						if(isset($_SESSION['reader'])){
							$controller->edit();
						}
						else
							$controller->login();
						break;
					}
					case 'update':
					{
						if(isset($_SESSION['reader'])){
							$controller->update();
						}
						else
							$controller->login();
						break;
					}
					case 'create':
					{
						$controller->create();
						break;
					}
					default:
					{
						if(isset($_SESSION['reader'])){
							$controller->show();
						}
						else
							$controller->login();
						break;
					}
				}
				break;
			}
			
			default:
			{	
				include_once('Controller/HomeController.php');
				$controller = new HomeController();
				$controller->index();
				break;
			}
		}
	?>
</body>
</html>