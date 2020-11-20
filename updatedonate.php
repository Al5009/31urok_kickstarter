<?php 

	$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
	$query = mysqli_query($connect, "SELECT * FROM project WHERE id='{$_GET['id']}'");

	$resolt = $query->fetch_assoc();

	$donated = $resolt["donated"];
	$donated = $donated + 10;

	$query1 = mysqli_query($connect, "UPDATE project SET donated='" . $donated . "' WHERE id='" . $_GET['id'] ."'");

	header("Location: index.php");

 ?>