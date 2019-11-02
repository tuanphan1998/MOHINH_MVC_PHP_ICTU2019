<?php
	session_start();
	include 'Controller/commit.php';
	$cmtController = new commit();
	$task = "default";
	if(isset($_GET['task']))
	{
		$task = $_GET['task'];
	}
	switch ($task) 
	{
			case 'default':
			$cmtController->showdata();
			$data = $_SESSION['data'];
			include 'View/list.php';
			# code...
			break;
		

			case 'insertorupdates':
			$cmtController->laydulieu();
			$data = $_SESSION['id'];
			include 'View/addorupdate.php';
			# code...
			break;

			case 'insertorupdate':
			$cmtController->themmoithanhvienofxoa($_POST);
			# code...
			break;


			case 'update':
			$cmtController->chinhsuathanhvien($_POST);
			# code...
			break;

			case 'delete':
			$cmtController->xoadulieu();
			# code...
			break;

		default:
			# code...
			break;
	}
?>