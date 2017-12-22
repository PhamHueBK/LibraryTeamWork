<?php 
	include_once('Model/Home.php');
	include_once('Model/Post.php');
	include_once('Model/BookDetail.php');

	class HomeController{
		public $homeModel;
		public $postModel;
		public $bookModel;

		public function __construct(){
			$this->homeModel = new Home();
			$this->postModel = new Post();
			$this->bookModel = new BookDetail();
		}

		public function index(){
			$conditionPost = "where loaiBaiDang = 1 ORDER BY maBaiDang DESC LIMIT 0,10";
			$post = $this->postModel->getAll($conditionPost);
			$conditionNew = "where loaiBaiDang = 0 ORDER BY maBaiDang DESC LIMIT 0,10";
			$news = $this->postModel->getAll($conditionNew);
			$conditionBook = "ORDER BY cuonsach.maCuonSach DESC LIMIT 0,10";
			$book = $this->bookModel->getAll($conditionBook);
			//die($post['tenBaiDang']);
			require_once('View/home/index.php');
		}

		public function server(){
			require_once('View/home/service.php');
		}

		public function pageChild(){
			$url = $_GET['act'];
			require_once('View/home/'.$url.".php");
		}
	}
?>