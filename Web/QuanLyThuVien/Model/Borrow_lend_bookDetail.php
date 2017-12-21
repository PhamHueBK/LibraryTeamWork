<?php 
	include_once('Model/Model.php');

	class Borrow_lend_bookDetail extends Model{
		public $table = "MuonTraSachCT";
		public $primaryKey = "maMuonTraSachCT";

		public function __construct(){
			parent::__construct();
		}
	}
?>