<?php 
	include_once('Model/Review.php');

	class ReviewController{
		public $reviewModel;

		public function __construct(){
			$this->reviewModel = new Review();
		}
	}
?>