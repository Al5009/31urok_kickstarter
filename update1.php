<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
	$query1 = mysqli_query($connect, "UPDATE project SET title='" . $_GET['title'] . "', description='" . $_GET['description'] . "', goal='" . $_GET['goal'] . "', img='" . $_GET['img'] . "' WHERE id='" . $_GET['id'] ."'");
	header('Location: dobavl.php');
?>