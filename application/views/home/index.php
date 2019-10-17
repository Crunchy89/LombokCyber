
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
