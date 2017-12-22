<?php 
	include_once('Model/BookDetail.php');
	include_once('Model/Book.php');

	class BookDetailController{
		public $bookDetailModel;
		public $book;

		public function __construct(){
			$this->bookDetailModel = new BookDetail();
			$this->book = new Book();
		}

		public function index(){
			$maQuyenSach = $_GET['maQuyenSach'];
			$condition = "where maQuyenSach = '".$maQuyenSach."'";
			$data = $this->bookDetailModel->getAll($condition);
			$quyenSach = $this->book->find($maQuyenSach);
			require_once('View/bookDetail/index.php');
		}

		public function create(){
			$data = $_POST;
			if($_FILES['url']['name'] != NULL){ // Đã chọn file
	        // Tiến hành code upload file
	        if($_FILES['url']['type'] == "image/jpeg"
	        || $_FILES['url']['type'] == "image/png"
	        || $_FILES['url']['type'] == "image/gif"){
		        // là file ảnh
		        // Tiến hành code upload  
		            if($_FILES['url']['size'] > 1048576){
		                echo "File không được lớn hơn 1mb";
		            }else{
		                // file hợp lệ, tiến hành upload
		                $path = 'View/images/'.$_FILES['url']['name']; // Đường dẫn chưa file upload
		                // Gọi hàm upload file
		                move_uploaded_file($_FILES['url']['tmp_name'], $path);
		                echo "Upload thành công <br />";
		                echo "Tên file : ".$name."<br />";
		                echo "Kiểu file : ".$_FILES['url']['type']."<br />";
		                echo "File size : ".$_FILES['url']['size'];
		           }
		        }else{
		           // không phải file ảnh
		           echo "Kiểu file không hợp lệ";
		        }
		   }
			$data = $this->bookDetailModel->insert($data, "maCuonSach");

			$jSonData = json_encode($data, false);

			echo $jSonData;
			
		}
		public function delete(){
			$id = $_GET['maCuonSach'];
			$data = array();
     		$data['status'] = $this->bookDetailModel->delete($id);
     		$data['id'] = $id;
     		$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function show(){
			$id = $_GET['id'];
			$data = $this->bookDetailModel->find($id);
			require_once('View/bookDetail/show.php');
		}

		public function update(){
			$data = $_POST;
			$data['tenCuonSach'] = "N'".$data['tenCuonSach']."'";
			$data['viTri'] = "N'".$data['viTri']."'";
			$data['ghiChu'] = "N'".$data['ghiChu']."'";
			$data = $this->bookDetailModel->update($data, "maCuonSach");
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function edit(){
			$id = $_GET['id'];

			$data = $this->bookDetailModel->find($id);
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}
	}

?>