<?php 
	include_once('Model/Home.php');

	class HomeController{
		public $homeModel;

		public function __construct(){
			$this->homeModel = new Home();
		}

		public function index(){
			require_once('View/home/index.php');
		}

		public function show(){
			$id = $_GET['id'];
			$post = $this->homeModel->find($id);
			require_once('View/home/show.php');
		}
	}
?>