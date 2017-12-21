<?php 
	include_once('Model/Post.php');

	class PostController{
		public $postModel;

		public function __construct(){
			$this->postModel = new Post();
		}

		public function index(){
			$post = $this->postModel->All();
			require_once('View/post/index.php');
		}

		public function show(){
			$id = $_GET['id'];
			$post = $this->postModel->find($id);
			require_once('View/post/show.php');
		}
	}
?>