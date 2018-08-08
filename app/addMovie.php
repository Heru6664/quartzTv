<?php 
	include("process/controllers.php");

	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$years = $_POST['years'];
	$genre = $_POST['genre'];
	$note = $_POST['note'];

	$query = mysql_query("INSERT INTO movie VALUES(
			'',
			'".$title."',
			'".$subtitle."',
			'".$years."',
			'".$genre."',
			'".$note."'
			)");
	if (!$query) {
		// header("location:../index.php?error=add%movie%400");
		echo "error: ", mysql_error();
	}else{
		echo "sukses";
		header("location:process/success.php");
	}
 ?>