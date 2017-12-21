<?php 
	include_once('Model/Reader.php');

	class ReaderContrller{
		public $readerModel;

		public function __construct(){
			$this->readerModel = new Reader();
		}
	}
?>