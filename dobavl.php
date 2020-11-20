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
	<div class="col-7 mx-auto" style="background-color: white;">
		<h3>Добавить новый проект</h3>
		<div class="col-8 mx-auto"> <!-- 2. выводите все элементы в этом диве -->
			 <form action="xz.php" method="GET" class="">
				<div class="mr-5" style="margin-top: 10px;">
					<input placeholder="Название" name="title" class="form-control">
				</div>
				<div class="mr-5" style="margin-top: 5px;">
					<textarea placeholder="Описание" name="description" class="form-control"></textarea>
				</div>
				<div class="mr-5" style="margin-top: 5px;">
					<input placeholder="Необходимая сумма (только цифры)" name="goal" class="form-control">
				</div>
				<input value="0" name="id" class="form-control d-none">
				<div class="mr-5" style="margin-top: 5px;">
					<input placeholder="Картинка" name="img" class="form-control">
				</div>
				<div class="mr-5" style="margin-top: 5px;">
					<input placeholder="Ваше имя" name="user" class="form-control">
				</div>
				<div class="mr-5" style="margin-top: 5px;">
					<input placeholder="Страна" name="place" class="form-control">
				</div>
				<div class="mr-5" style="margin-top: 5px;">
					<button class="btn bg-success text-white">Отправить</button>
				</div>
				<div class="col-1" style="height: 20px;"></div>
			</form>
		</div>
	</div>
		<div class="col-7 mx-auto">
			<h3>Мои проекты</h3>
			<?php  
				$connect = mysqli_connect("127.0.0.1", "root", "", "31urok");
				$query = mysqli_query($connect, "SELECT * FROM project WHERE user='Astro Cats Camp'");
				for ($i = 0; $i < mysqli_num_rows($query); $i++) { 
					$stroka = $query->fetch_assoc();
				?>
				<div class="col-12">
					<h2 style="text-align: center;"><?php echo $stroka["title"] ?></h2>
					<p style="text-align: center;"><?php echo $stroka["description"]?></p>

					<div class="d-flex">
						<div class="col-9" style="height:300px; background-image:url(<?php echo $stroka['img'] ?>); background-size: cover; background-position:center"></div>
						<div class="col-3">
							<h2 style="color: green;"><?php echo $stroka["donated"] . "$ pledged"?></h2>
							<h2 class="mt-5"><?php echo $stroka["goal"] . "$ goal"?></h2>

							<form action="update.php" method="GET">
								<input value="<?php echo $stroka["id"] ?>" name="id" class="form-control d-none">
								<button class="btn bg-success text-white">Изменить</button>
							</form>	
							<form action="delete.php" method="GET">
								<input value="<?php echo $stroka["id"] ?>" name="id" class="form-control d-none">
								<button class="btn bg-danger text-white">Удалить</button>
							</form>	
						</div>
						
					</div>
				</div>
				<?php
					}
				 ?>

	</div>
		</div>
	</body>
</html>