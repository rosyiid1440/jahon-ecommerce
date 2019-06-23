<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Team Ngopi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url()?>assets/css/main.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url()?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url()?>/assets/css/main.css" />
</head>

<body>
	<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#34495e">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?=base_url()?>">Jah-<b>On</b></a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Kategori
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="<?=base_url()?>Kategori/Kemeja">Kemeja</a>
					<a class="dropdown-item" href="#">Hoodie</a>
					<a class="dropdown-item" href="#">Celana</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" style="margin-right:10px;">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:640px;border-radius:20px;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius:20px;">Search</button>
			</form>
			<a href="<?=base_url()?>keranjang" style="margin-right:10px;" ><img src="<?=base_url()?>/assets/img/gambarkeranjang.png" style="max-width:30px;" alt=""></a>
			<a href="<?=base_url()?>login"><button class="btn btn-success" style="margin-right:10px;">Login</button></a>
			<a href="<?=base_url()?>register"><button class="btn btn-success">Register</button></a>
		</div>
	</div>
    </nav>