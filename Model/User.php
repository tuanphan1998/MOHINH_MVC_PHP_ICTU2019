<?php
	class User
	{
		private $id , $title , $name , $email , $noidung;
		function  __construct($id , $title , $name , $email , $noidung)
		{
			$this->id = $id;
			$this->title = $title;
			$this->name = $name;
			$this->email = $email;
			$this->noidung = $noidung;
		}
		public function getID()
		{
			return $this->id;
		}
		public function getTITLE()
		{
			return $this->title;
		}
		public function getNAME()
		{
			return $this->name;
		}
		public function getEMAIL()
		{
			return $this->email;
		}
		public function getNOIDUNG()
		{
			return $this->noidung;
		}
	}
?>