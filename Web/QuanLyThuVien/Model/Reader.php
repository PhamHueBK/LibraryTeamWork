<?php 
	include_once('Model/Model.php');

	class Reader extends Model{
		public $table = "BanDoc";
		public $primaryKey = "maBanDoc";

		public function __construct(){
			parent::__construct();
		}
	}
?>