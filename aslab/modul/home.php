<div class="panel-header bg-secondary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Aplikasi Absensi Praktikum</h2>
				<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning">
						<?= $data['nama_aslab']; ?>
					</b></h5>
			</div>
		</div>
	</div>
</div>

<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">
						<center>
							<img src="../assets/img/Logo.png" width="100">
							<br>
							<b>LABCOM WICIDA</b>
						</center>
					</div>
					<div class="card-category">
						<center>
							Jl. M. Yamin, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75123
							<br>Email : wicida@wicida.ac.id Telp.0541 736071
						</center>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<!-- 	<div class="card-header">
									<h4 class="card-title">Nav Pills With Icon (Horizontal Tabs)</h4>
								</div> -->
				<div class="card-body">
					<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center"
						id="pills-tab-with-icon" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
								role="tab" aria-controls="pills-home-icon" aria-selected="true">
								<i class="fas fa-clipboard-list"></i>
								Absen
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill"
								href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon"
								aria-selected="false">
								<i class="fas fa-list-alt"></i>
								Rekap
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill"
								href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon"
								aria-selected="false">
								<i class="fas fa-user-astronaut"></i>
								About
							</a>
						</li>
					</ul>
					<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
						<div class="tab-pane fade" id="pills-home-icon" role="tabpanel"
							aria-labelledby="pills-home-tab-icon">
							<p>
							<ul class="list-group">
								<?php


								foreach ($mengajar as $dm) { ?>
									<li class="list-group-item">
										<a class="btn btn-secondary btn-block text-left"
											href="?page=absen&pelajaran=<?= $dm['id_mengajar'] ?> ">
											<i class="fas fa-chevron-circle-right"></i>
											<span class="sub-item">
												<?= strtoupper($dm['matakuliah']); ?> (
												<?= strtoupper($dm['nama_kelas']); ?>)
											</span>
										</a>
									</li>
								<?php } ?>
							</ul>
							</p>

						</div>
						<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel"
							aria-labelledby="pills-profile-tab-icon">

							<p>
							<ul class="list-group">
								<?php


								foreach ($mengajar as $dm) { ?>
									<li class="list-group-item">
										<a class="btn btn-secondary btn-block text-left"
											href="?page=rekap&pelajaran=<?= $dm['id_mengajar'] ?> ">
											<i class="fas fa-chevron-circle-right"></i>
											<span class="sub-item">
												<?= strtoupper($dm['matakuliah']); ?> (
												<?= strtoupper($dm['nama_kelas']); ?>)
											</span>
										</a>
										<?php
										$bulan = date('m');

										?>
									<?php } ?>
								</li>
							</ul>
							</p>


						</div>
						<div class="tab-pane fade" id="pills-contact-icon" role="tabpanel"
							aria-labelledby="pills-contact-tab-icon">
							<p>
								<hr>

								Aplikasi Absensi Mahasiswa ini dibuat untuk mendokumentasikan kehadiran mahasiswa,
								Aplikasi sangat Mudah digunakan (Berbasis Web)
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">