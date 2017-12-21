<?php 
	include_once('Model/Model.php');

	class Book extends Model{
		public $table = "QuyenSach";
		public $primaryKey = "maQuyenSach";

		public function __construct(){
			parent::__construct();
		}
	}
?>