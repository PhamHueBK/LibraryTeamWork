<?php 
	include_once('Model/Post.php');

	class PostController{
		public $postModel;

		public function __construct(){
			$this->postModel = new Post();
		}

		public function index(){
			$condition = "join nhanvien on nhanvien.maNhanVien = BaiDang.maNhanVien";
			$data = $this->postModel->getAll($condition);
			require_once('View/post/index.php');
		}

		public function create(){
			$data = $_POST;
			$date = date('Y-m-d');
			$data['ngayDang'] = $date;
			$data = $this->postModel->insert($data, "maBaiDang");

			$jSonData = json_encode($data, false);

			echo $jSonData;
			
		}
		public function delete(){
			$id = $_GET['maBaiDang'];
			$data = array();
     		$data['status'] = $this->postModel->delete($id);
     		$data['id'] = $id;
     		$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function show(){
			$id = $_GET['id'];
			$data = $this->postModel->find($id);
			require_once('View/post/show.php');
		}

		public function update(){
			$data = $_POST;
			$data['tenBaiDang'] = "N'".$data['tenBaiDang']."'";
			$data['moTa'] = "N'".$data['moTa']."'";
			$data['noiDungBaiDang'] = "N'".$data['noiDungBaiDang']."'";
			$data = $this->postModel->update($data, "maBaiDang");
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}

		public function edit(){
			$id = $_GET['id'];

			$data = $this->postModel->find($id);
			$jSonData = json_encode($data, false);
     		echo $jSonData;
		}
	}
?>