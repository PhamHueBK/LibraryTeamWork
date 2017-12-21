<?php 
	include_once('Model/User.php');

	class UserController{
		public $userModel;

		public function __construct(){
			$this->userModel = new User();
		}

		public function login(){
			require_once('View/user/login.php');
		}

		public function loginSuccess(){
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$condition = "where email = '".$email."' AND password = '".$password."' AND phanquyen = 1";
			$user = $this->userModel->getAll($condition);

			if(count($user) > 0)
			{
				$_SESSION['admin'] = $user[0];
				header('Location: ?mode=home&act=index');
			}
			else
			{
				$_SESSION['isLogin'] = "false";
				header('Location: ?mode=user&act=login');
			}
		}

		public function logout(){
			unset($_SESSION['admin']);
			header('Location: ?mode=user&act=login');
		}

		public function index(){
			$data = $this->userModel->All();
			require_once('View/user/index.php');
		}

		public function create(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
			$data = $this->userModel->insert($data, "maNhanVien");

			$jSonData = json_encode($data, false);

			echo $jSonData;
			
		}
		public function delete(){
			$id = $_GET['maNhanVien'];
			$data = array();
     		$data['status'] = $this->userModel->delete($id);
     		$data['id'] = $id;
     		$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function show(){
			$id = $_GET['id'];
			$data = $this->userModel->find($id);
			require_once('View/user/show.php');
		}

		public function update(){
			$data = $_POST;
			$data['tenNhanVien'] = "N'".$data['tenNhanVien']."'";
			$data['soDienThoai'] = "'".$data['soDienThoai']."'";
			$data['gioiTinh'] = "N'".$data['gioiTinh']."'";
			$data['ngaySinh'] = "'".$data['ngaySinh']."'";
			$data['chucVu'] = "N'".$data['chucVu']."'";
			$data['diaChi'] = "N'".$data['diaChi']."'";
			$data = $this->userModel->update($data, "maNhanVien");
			//$jSonData = json_encode($data, false);
     		echo $data;
		}

		public function edit(){
			$id = $_GET['id'];

			$data = $this->userModel->find($id);
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}
	}
?>