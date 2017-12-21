<?php 
	include_once('Model/Book.php');
	include_once('Model/BookDetail.php');

	class BookController{
		public $bookModel;
		public $bookDetailModel;

		public function __construct(){
			$this->bookModel = new Book();
			$this->bookDetailModel = new BookDetail();
		}

		public function index(){

		}

		public function show(){

		}

		public function borrow(){
			
		}
	}
?>