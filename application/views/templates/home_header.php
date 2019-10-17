<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/lc.png') ?>">
	<!-- <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css"> -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<!-- <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<?= $this->session->flashdata('modal'); ?>
</head>

<body class="bg-me" style="background-image: url('<?= base_url("assets/img/bg.jpg") ?>');">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary mt-3">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/lc.png') ?>" width="40" alt="Lombok Cyber"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('Home') ?>"><i class="fas fa-fw fa-home"></i> Beranda <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-user"></i> Tentang
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Visi & Misi</a>
							<a class="dropdown-item" href="#">Sejarah Lombok Cyber</a>
							<a class="dropdown-item" href="#">Struktur Organisasi</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Anggota</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-code"></i> Kelas Programming
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">PHP</a>
							<a class="dropdown-item" href="#">Javascripts</a>
							<a class="dropdown-item" href="#">HTML 5</a>
							<a class="dropdown-item" href="#">CSS 3</a>
							<a class="dropdown-item" href="#">C++</a>
							<a class="dropdown-item" href="#">Python</a>
							<a class="dropdown-item" href="#">SQL</a>
							<a class="dropdown-item" href="#">Bootstrap</a>
							<a class="dropdown-item" href="#">Code Igniter</a>
							<a class="dropdown-item" href="#">Android</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-network-wired"></i> Kelas Jaringan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Mikrotik</a>
							<a class="dropdown-item" href="#">Server</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-fw fa-bolt"></i> Kelas IoT
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-image"></i> Kelas Multimedia
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Photoshop</a>
							<a class="dropdown-item" href="#">Corel Draw </a>
						</div>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
					<?php if ($this->session->userdata('admin')) : ?>
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-fw fa-key"></i> Admin
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?= site_url('home/admin') ?>">Admin Page</a>
									<a class="dropdown-item" href="<?= site_url('home/logout') ?>">Logout </a>
								</div>
							</li>
						</ul>
					<?php else : ?>
						<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#login"><i class="fas fa-fw fa-lock"></i>
							Login</a>
					<?php endif; ?>
				</div>
			</div>
		</nav>