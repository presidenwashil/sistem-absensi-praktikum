<!-- Header Start -->
<div class="panel-header bg-secondary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Administrator</h2>
				<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning">
						<?= $data['nama_lengkap']; ?>
					</b> | Aplikasi Absensi Praktikum</h5>
			</div>
		</div>
	</div>
</div>
<!-- End of Header -->

<!-- Content Start -->
<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">
						<center>
							<img src="../assets/img/Logo.png" width="150px">
							<br>
							<b>Labcom Wicida</b>
						</center>
					</div>
					<div class="card-category">
						<center>
							Jl. M. Yamin, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75123
							<br>Email : wicida@wicida.ac.id Telp.
							0541 736071
						</center>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Total Mahasiswa</p>
												<h4 class="card-title">
													<?php echo $jumlahSiswa; ?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-user-tie"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Total Aslab</p>
												<h4 class="card-title">
													<?php echo $jumlahAslab; ?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-desk"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Total Kelas</p>
												<h4 class="card-title">
													<?php echo $jumlahKelas; ?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Of Content -->