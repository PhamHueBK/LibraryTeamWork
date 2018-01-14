<?php 
	include_once('Model/Model.php');

	class BookDetail extends Model{
		public $table = "CuonSach";
		public $primaryKey = "maCuonSach";

		public function __construct(){
			parent::__construct();
		}
	}
?>