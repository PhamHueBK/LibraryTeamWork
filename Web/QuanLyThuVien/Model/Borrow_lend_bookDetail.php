<?php 
	include_once('Model/Model.php');

	class Borrow_lend_bookDetail extends Model{
		public $table = "muontrachitiet";
		public $primaryKey = "maPhieuMuonTraCT";

		public function __construct(){
			parent::__construct();
		}
	}
?>