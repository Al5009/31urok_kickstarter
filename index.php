<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<a href="index.php"><img src="logo.png" class="w-25"></a>
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="dobavl.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
		$query = mysqli_query($connect, "SELECT * FROM project");
	 ?>
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php echo mysqli_num_rows($query) ?></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			for ($i = 0; $i < mysqli_num_rows($query); $i++) { 
				$stroka = $query->fetch_assoc();
				?>
				<div class="col-4 border rounded">
					<div style="height:300px; background-image:url(<?php echo $stroka['img'] ?>); background-size: cover; background-position:center"></div>
					<h2 class="font-weight-light"><?php echo $stroka["title"] ?></h2>
					<p class=""><?php echo $stroka["description"]?></p>
					<p>By <?php echo $stroka["user"] . " from " . $stroka["place"]?></p>
					<p><?php echo $stroka["goal"] . "$ goal"?></p>
					<p style="color: green;"><?php echo $stroka["donated"] . "$ pledged"?></p>
					<form action="updatedonate.php" method="GET">
						<div class="d-flex">
							<input value=<?php echo $stroka["id"]; ?>; name="id" class="form-control d-none">
							<button class="btn bg-success" style="color: white;">Back this project +10$</button>
						</div>
					</form>
				</div>
				<?php
			}
		 ?>

	</div>

</div>
</body>
</html>