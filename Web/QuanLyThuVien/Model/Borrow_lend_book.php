<?php 
	include_once('Model/Model.php');

	class Borrow_lend_book extends Model{
		public $table = "MuonTraSach";
		public $primary = "maMuonTraSach";

		public function __construct(){
			parent::__construct();
		}
	}
?>