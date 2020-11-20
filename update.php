<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">
	</style>
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

	<div class="col-8 mx-auto">
		<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
			$query = mysqli_query($connect, "SELECT * FROM project WHERE id={$_GET['id']}");
			$stroka = $query->fetch_assoc();
		?>
		<form action="update1.php" method="GET" class="">
			<div class="mr-5" style="margin-top: 10px;">
				<input value="<?php echo $stroka["title"] ?>" placeholder="Название" name="title" class="form-control">
			</div>
			<div class="mr-5" style="margin-top: 5px;">
				<input value="<?php echo $stroka["description"] ?>" placeholder="Описание" name="description" class="form-control"></input>
			</div>
			<div class="mr-5" style="margin-top: 5px;">
				<input value="<?php echo $stroka["goal"] ?>" placeholder="Необходимая сумма (только цифры)" name="goal" class="form-control">
			</div>
			<div class="mr-5" style="margin-top: 5px;">
				<input value="<?php echo $stroka["img"] ?>" placeholder="Картинка" name="img" class="form-control">
			</div>
			<input value="<?php echo $_GET["id"] ?>" name="id" class="form-control d-none">
			<div class="mr-5" style="margin-top: 5px;">
				<button class="btn bg-success text-white">Изменить</button>
			</div>
			<div class="col-1" style="height: 20px;"></div>
		</form>
	</div>

</body>
</html>