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
			$sql = "select * from ".$this->table;
			mysqli_set_charset($this->conn, 'UTF8');
			$result = $this->conn->query($sql);
			$data = array();
			while($rows = mysqli_fetch_assoc($result))
				$data[] = $rows;
			return $data;
		}

		public function getAll($condition){
			$sql = "select * from ".$this->table." ".$condition;
			//die($sql);
			mysqli_set_charset($this->conn, 'UTF8');
			$result = $this->conn->query($sql);
			$data = array();
			while($rows = mysqli_fetch_assoc($result))
				$data[] = $rows;
			return $data;
		}

		public function find($id){
			$sql = "select * from ".$this->table." where ".$this->primaryKey." = ".$id;
			die($sql);
			mysqli_set_charset($this->conn, 'UTF8');
			$result = $this->conn->query($sql);
			$data = array();
			$data = mysqli_fetch_assoc($result);
			return $data;
		}

		public function insert($data, $primaryKey){
			$fields = "";
			$values = "";

			foreach ($data as $key => $value) {
				$fields .= ",$key";
				$values .= ",'".$value."'";
			}

			$sql = "INSERT INTO ".$this->table."(".trim($fields,",").") VALUES (".trim($values,",").")";
			//die($sql);
			if(isset($data['submit']))
				unset($data['submit']);
			//die($sql);
			mysqli_set_charset($this->conn, 'UTF8');
			$result = $this->conn->query($sql);
			$dataRS = array();
			unset($data[$primaryKey]);
			if(isset($data['created_at']))
				unset($data['created_at']);
			if($result == 1)
			{
				$dataRS = $this->getList($data);
			}

			return $dataRS;
		}

		public function update($data, $primaryKey){
			$fields = "";
			foreach ($data as $key => $value) {
				$fields .= $key." = ".$value.",";
			}

			$sql = "update ".$this->table." set ".trim($fields, ",")." where ".$this->primaryKey." = ".$data[$primaryKey];
			//die($sql);
			$result = $this->conn->query($sql);

			$data = $this->find($data[$this->primaryKey]);
			return $data;
		}

		public function getList($data){
			$field = "";

			foreach ($data as $key => $value) {
				$field .= $key." = '".$value."' AND ";
			}

			$sql = "select * from ".$this->table." where ".trim($field, " AND ");
			mysqli_set_charset($this->conn, 'UTF8');
			//die($sql);
			$result = $this->conn->query($sql);

			$data = array();

			//die($result->num_rows);
			if($result->num_rows > 0)
				$data = mysqli_fetch_assoc($result);

			return $data;
		}
	}
?>