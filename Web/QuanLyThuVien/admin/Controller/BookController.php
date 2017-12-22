<?php 
	include_once('Model/Book.php');

	class BookController{
		public $bookModel;

		public function __construct(){
			$this->bookModel = new Book();
		}

		public function index(){
			$data = $this->bookModel->All();
			require_once('View/book/index.php');
		}

		public function create(){
			$data = $_POST;
			$data = $this->bookModel->insert($data, "maQuyenSach");

			$jSonData = json_encode($data, false);

			echo $jSonData;
			
		}
		public function delete(){
			$id = $_GET['maQuyenSach'];
			$data = array();
     		$data['status'] = $this->bookModel->delete($id);
     		$data['id'] = $id;
     		$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function show(){
			$id = $_GET['id'];
			$data = $this->bookModel->find($id);
			require_once('View/book/show.php');
		}

		public function update(){
			$data = $_POST;
			$data['tenQuyenSach'] = "N'".$data['tenQuyenSach']."'";
			$data['nhaXuatBan'] = "N'".$data['nhaXuatBan']."'";
			$data['tacGia'] = "N'".$data['tacGia']."'";
			$data['moTa'] = "N'".$data['moTa']."'";
			$data['ghiChu'] = "N'".$data['ghiChu']."'";
			$data = $this->bookModel->update($data, "maQuyenSach");
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function edit(){
			$id = $_GET['id'];

			$data = $this->bookModel->find($id);
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}
	}
?>