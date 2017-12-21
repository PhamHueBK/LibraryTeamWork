<?php 
	include_once('Model/BookDetail.php');

	class BookDetailController{
		public $bookDetailModel;

		public function __construct(){
			$this->bookDetailModel = new BookDetail();
		}

		public function index(){
			$maQuyenSach = $_GET['id'];
			$tenQuyenSach = "";
			$condition = " where maQuyenSach = ".$maQuyenSach." AND trangThai = 0";
			$books = $this->bookDetailModel->getAll($condition);

			require_once('View/bookDetail/index.php');
		}

		public function show(){
			$id = $_GET['id'];
			$book = $this->bookDetailModel->find($id);
			require_once('View/book/show.php');
		}
	}
?>