<?php 
	include_once('Model/Borrow_lend_book.php');
	include_once('Model/Borrow_lend_bookDetail.php');

	class Borrow_lend_bookController{
		public $blbModel;
		public $blbDetailModel;

		public function __construct(){
			$this->blbModel = new Borrow_lend_book();
			$this->blbDetailModel = new Borrow_lend_bookDetail();
		}
	}
?>