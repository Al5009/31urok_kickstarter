<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
	$query1 = mysqli_query($connect, "DELETE FROM project WHERE id='" . $_GET["id"] . "'");
	header('Location: dobavl.php');
 ?>