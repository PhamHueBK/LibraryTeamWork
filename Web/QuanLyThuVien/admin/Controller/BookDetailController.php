<?php 
	include_once('Model/BookDetail.php');

	class BookDetailController{
		public $bookDetailModel;

		public function __construct(){
			$this->bookDetailModel = new BookDetail();
		}
	}

?>