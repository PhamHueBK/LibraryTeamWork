<?php  
	include_once('Model/Reader.php');
	include_once('Model/Borrow_lend_book.php');
	include_once('Model/Borrow_lend_bookDetail.php');

	class ReaderController{
		public $readerModel;
		public $blbModel;
		public $blbDetailModel;
		public $passOld;

		public function __construct(){
			$this->readerModel = new Reader();
			$this->blbModel = new Borrow_lend_book();
			$this->blbDetailModel = new Borrow_lend_bookDetail();
		}

		public function login(){
			$data = array();
			$data['email'] = $_POST['email'];
			$data['password'] = md5($_POST['password']);
			$condition = "where email = '".$data['email']."' AND password = '".$data['password']."'";
			$user = $this->readerModel->getAll($condition);
			/*print_r($user);
			die;*/
			if(count($user) > 0)
			{
				$_SESSION['user'] = $user[0];
				if ($_SESSION['isLogin']) {
					unset($_SESSION['isLogin']);
				}
				header('Location: ?mode=home&act=index');
			}
			else
			{
				$_SESSION['isLogin'] = false;
				
				header('Location: ?mode=home&act=index');
			}
		}

		public function profile(){
			$phieuMuon = array();
			$phieuMuonCT = array();
			$user = $_SESSION['user'];
			$this->passOld = $user['password'];
			$condition = "where maDocGia = ".$user['maBanDoc'];
			$phieuMuon = $this->blbModel->getAll($condition);
			if(count($phieuMuon) > 0){
				$condition = "join cuonsach on muontrachitiet.maCuonSach = cuonsach.maCuonSach where muontrachitiet.maPhieu =  ".$phieuMuon['phieuMuon'];
				$phieuMuonCT = $this->blbDetailModel->getAll($condition);
			}
			require_once('View/reader/profile.php');
		}

		public function logout(){
			unset($_SESSION['user']);
			if(isset($_SESSION['isLogin']))
				unset($_SESSION['isLogin']);
			header('Location: ?mode=home&act=index');
		}

		public function show(){

		}

		public function create(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
			$data['maBanDoc'] = 'NULL';
			$data = $this->readerModel->insert($data, "maBanDoc");
			if(count($data) > 0)
				$_SESSION['isSiunUp'] = true;
			else
				$_SESSION['isSiunUp'] = false;
			header('Location: ?mode=home&act=index');
		}

		public function edit(){

		}

		public function update(){
			$data = $_POST;
			$phieuMuon = array();
			$phieuMuonCT = array();
			if(md5($data['password']) == $this->passOld)
				$data['password'] =$this->passOld;
			else
				$data['password'] = md5($_POST['password']);
			$data['tenBanDoc'] = "N'".$data['tenBanDoc']."'";
			$data['email'] = "'".$data['email']."'";
			$data['password'] = "'".$data['password']."'";
			$data['ngaySinh'] = "'".$data['ngaySinh']."'";
			$data['gioiTinh'] = "N'".$data['gioiTinh']."'";
			$data['soDienThoai'] = "'".$data['soDienThoai']."'";
			$user = $this->readerModel->update($data, "maBanDoc");
			$_SESSION['user'] = $user;
			$condition = "where maDocGia = ".$user['maBanDoc'];
			$phieuMuon = $this->blbModel->getAll($condition);
			if(count($phieuMuon) > 0){
				$condition = "join cuonsach on muontrachitiet.maCuonSach = cuonsach.maCuonSach where muontrachitiet.maPhieu =  ".$phieuMuon['phieuMuon'];
				$phieuMuonCT = $this->blbDetailModel->getAll($condition);
			}
			$_SESSION['isUpdate'] = true;
			require_once('View/reader/profile.php');
		}
	}
?>