<?php 
	include_once('Model/Connection.php');

	class Model{
		public $table = "";
		public $primaryKey = "";
		public $conn;

		public function __construct(){
			$connection = new Connection();
			$this->conn = $connection->conn;
		}

		public function All(){

		}

		public function insert($data){

		}

		public function delete($id){

		}

		public function find($id){

		}

		public function update($data){
			
		}
	}
?>