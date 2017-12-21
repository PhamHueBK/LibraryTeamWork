<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8"/>
</head>
<body>
    <?php 
        session_start();

        if(isset($_SESSION['admin']))
        {
            if(isset($_GET['mode']))
            {
                $mode = $_GET['mode'];
                if(isset($_GET['act']))
                    $act = $_GET['act'];
                else
                    $act = "index";
            }
            else
            {
                $mode = "home";
                $act = "index";
            }
        }
        else
        {
            $mode = "user";
            if(isset($_GET['act'])){
                if($_GET['act'] == "loginSuccess")
                    $act = $_GET['act'];
                else
                    $act = "login";
            }
            else
                $act = "login";
        }
        switch ($mode) {
            case 'user':
            {
                include_once('Controller/UserController.php');
                $controller = new UserController();
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
                    case 'create':
                    {
                        $controller->create();
                        break;
                    }
                    case 'show':
                    {
                        $controller->show();
                        break;
                    }
                    case 'update':
                    {
                        $controller->update();
                        break;
                    }
                    case 'edit':
                    {
                        $controller->edit();
                        break;
                    }
                    case 'delete':
                    {
                        $controller->delete();
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
            case 'post':
            {
                include_once('Controller/PostController.php');
                $controller = new PostController();

                switch ($act) {
                    case 'create':
                    {
                        $controller->create();
                        break;
                    }
                    case 'update':
                    {
                        $controller->update();
                        break;
                    }
                    case 'delete':
                    {
                        $controller->delete();
                        break;
                    }
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
            case 'tag':
            {
                include_once('Controller/TagController.php');
                $controller = new TagController();

                switch ($act) {
                    case 'create':
                    {
                        $controller->create();
                        break;
                    }
                    case 'update':
                    {
                        $controller->update();
                        break;
                    }
                    case 'delete':
                    {
                        $controller->delete();
                        break;
                    }
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