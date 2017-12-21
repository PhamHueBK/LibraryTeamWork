<?php 
	include_once('Model/Book.php');

	class BookController{
		public $bookModel;

		public function __construct(){
			$this->bookModel = new Book();
		}
	}
?>