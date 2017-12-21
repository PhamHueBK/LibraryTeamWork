<?php 
	include_once('Model/Model.php');

	class Review extends Model{
		public $table = "PhanHoi";
		public $primaryKey = "maPhanHoi";

		public function __construct(){
			parent::__construct();
		}
	}
?>