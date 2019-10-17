<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> -->
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary mt-3">
			<a class="navbar-brand" href="#"><img src="<?=base_url('assets/img/lc.png')?>" width="40" alt="Lombok Cyber"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=site_url('Home')?>"><i class="fas fa-fw fa-home"></i> Beranda <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-fw fa-code-branch"></i> Visi & Misi</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-user"></i> Tentang
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Sejarah Lombok Cyber</a>
							<a class="dropdown-item" href="#">Struktur Organisasi</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Anggota</a>
						</div>
					</li>
          <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-fw fa-code"></i> Learning
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">PHP</a>
							<a class="dropdown-item" href="#">Javascripts</a>
							<a class="dropdown-item" href="#">HTML 5</a>
							<a class="dropdown-item" href="#">CSS 3</a>
							<a class="dropdown-item" href="#">C++</a>
							<a class="dropdown-item" href="#">Python</a>
						</div>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
					<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#login"><i class="fas fa-fw fa-lock"></i>
						Login</a>
				</div>
			</div>
		</nav>

    <div class="bingkai">
    <img src="<?=base_url('assets/img/head.jpg')?>" width="100%" alt="">
    </div>
    <div class="berita mt-1 mb-1 border d-flex align-content-center">
    <h6>Berita Terkini</h6>
    </div>
    <div class="container-fluid border">
    tes
    </div>


		<!-- Modal login -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Username / Email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<div class="input-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="Password"
										aria-label="Password" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<span onclick="see()" class="input-group-text" id="basic-addon2"><i id="slash"
												class="fas fa-fw fa-eye"></i></span>
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
		<script src="<?=base_url('assets/js/style.js')?>"></script>
		<!-- Core plugin JavaScript-->
		<script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>