<?php 
	include_once('Model/Model.php');

	class User extends Model{
		public $table = "NhanVien";
		public $primaryKey = "maNhanVien";

		public function __construct(){
			parent::__construct();
		}
	}
?>