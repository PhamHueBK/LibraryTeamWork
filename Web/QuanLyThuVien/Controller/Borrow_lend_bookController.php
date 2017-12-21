<?php 
	include_once('Model/Borrow_lend_book.php');
	include_once('Model/Borrow_lend_bookDetail.php');
	include_once('Model/BookDetail.php');
	include_once('Model/Book.php');

	class Borrow_lend_bookController{
		public $blbModel;
		public $blbDetailModel;
		public $bookDetail;
		public $bookModel;

		public function __construct(){
			$this->blbModel = new Borrow_lend_book();
			$this->blbDetailModel = new Borrow_lend_bookDetail();
			$this->bookDetail = new BookDetail();
			$this->book = new Book();
		}

		public function borrow(){
			$maDocGia = $_SESSION['user']['maBanDoc'];
			$maCuonSach = $_GET['maCuonSach'];
			$cuonSach = $this->bookDetail->find($maCuonSach);
			$chiPhi = $cuonSach['giaBia']/2;
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$date = getdate();
			$ngayTraSach = $date['mday'];
			$thangTraSach = $date['mon'];
			$namHienTai = $date['Year'];
			$hanTra = mktime(0, 0, 0, ($thangTraSach+6), ($ngayTraSach), $namHienTai);
			$hanTra = date('d/m/Y', $hanTra);
			$ngayMuon = date('d/m/Y', $date);
			require_once('View/borrow_lend_book/borrow.php');
		}

		public function borrow_access(){
			$data = array();
			$data['maPhieu'] = 'NULL';
			$data['maDocGia'] = $_POST['maDocGia'];
			$data['chiPhi'] = $_POST['chiPhi'];
			$data['tinhTrang'] = 0;
			$data['ngayMuon'] = date('Y-m-d', $_POST['ngayMuon']);
			$data = $this->blbModel->insert($data, "maPhieu");

			$dataCT = array();
			$dataCT['maPhieuMuonTraCT'] = 'NULL';
			$dataCT['maPhieu'] = $data['maPhieu'];
			$dataCT['maCuonSach'] = $_POST['maCuonSach'];
			$dataCT['hanTra'] = date('Y-m-d', $_POST['hanTra']);
			$dataCT['trangThai'] = 1;
			$dataCT = $this->blbDetailModel->insert($dataCT, "maPhieuMuonTraCT");
			$books = $this->book->All();
			header('View/book/index.php');
		}
	}
?>