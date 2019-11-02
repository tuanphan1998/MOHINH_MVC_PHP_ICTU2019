<?php
	class commit
	{
		private $cmtModel = NULL;
		public function __construct()
		{
			include 'Model/DBconn.php';
			$this->cmtModel = new DBconn();
		}
		public function showdata()
		{
			$result = $this->cmtModel->getalldata();
			if($result)
			{
				$_SESSION['data'] = $result;
			}
		}
		public function themmoithanhvienofxoa($User)
		{
			if(empty($User['title']) || empty($User['name']) || empty($User['email']) || empty($User['noidung']))
			{
				echo "nhap lai";
			}
			else
			{
				$cmt = new User(0,$User['title'],$User['name'],$User['email'],$User['noidung']);
				$result = $this->cmtModel->InsertData($cmt);
				if($result)
				{
					header('location: index.php');
				}
				else
				{
					echo "Them moi that bai";
				}
			}
		}


		public function chinhsuathanhvien($User)
		{
			if(empty($User['id']) ||  empty($User['title']) || empty($User['name']) || empty($User['email']) || empty($User['noidung']))
			{
				echo "nhap lai";
			}
			else
			{
				$cmt = new User($User['id'],$User['title'],$User['name'],$User['email'],$User['noidung']);
				$result = $this->cmtModel->UpdateData($cmt);
				if($result)
				{
					header('location: index.php');
				}
				else
				{
					echo "Them moi that bai";
				}
			}
		}


		public function xoadulieu()
		{
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$result = $this->cmtModel->DeleteData($id);
				if($result)
				{
					header('location: index.php');
				}
				else
				{
					echo "xoa k thanh cong";
				}
			}
		}
		public function laydulieu()
		{
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$result = $this->cmtModel->getalldatabyid($id);
				if($result)
				{
					$_SESSION['id'] = $result;
				}
			}
		}
	}
?>