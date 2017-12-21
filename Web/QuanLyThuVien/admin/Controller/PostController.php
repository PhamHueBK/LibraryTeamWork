<?php 
	include_once('Model/Post.php');

	class PostController{
		public $postModel;

		public function __construct(){
			$this->postModel = new Post();
		}
	}
?>