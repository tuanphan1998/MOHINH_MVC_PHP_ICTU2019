<?php
	include 'User.php';
	class DBconn
	{
		private $conn;
		public function __construct()
		{
			$this->conn();
		}
		public function conn()
		{
			$this->conn = new mysqli('localhost','root','','binhluan');
		}
		public function getalldata()
		{
			$sql = "SELECT * FROM giatri";
			$result = $this->conn->query($sql);
			$data = array();
			while ($datas = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new User($datas['id'] , $datas['title'] , $datas['name'] , $datas['email'] , $datas['noidung']));
			}
			return $data;
		}
		public function getalldatabyid($id)
		{
			$sql = "SELECT * FROM giatri WHERE id = ".$id;
			$result = $this->conn->query($sql);
			$data = array();
			while ($datas = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new User($datas['id'] , $datas['title'] , $datas['name'] , $datas['email'] , $datas['noidung']));
			}
			return $data;
		}
		public function InsertData($User)
		{
			$title = $User->getTITLE();
			$name = $User->getNAME();
			$email = $User->getEMAIL();
			$noidung = $User->getNOIDUNG();
			$sql = "INSERT INTO giatri VALUES (0,'$title','$name','$email','$noidung')";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function UpdateData($User)
		{
			$id = $User->getID();
			$title = $User->getTITLE();
			$name = $User->getNAME();
			$email = $User->getEMAIL();
			$noidung = $User->getNOIDUNG();
			$sql = "UPDATE giatri SET title='$title' , name='$name' , email = '$email' , noidung = '$noidung' WHERE id = '$id'";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function DeleteData($id)
		{
			$sql = "DELETE FROM giatri WHERE id = ".$id;
			$result = $this->conn->query($sql);
			return $result;
		}
	}
?>