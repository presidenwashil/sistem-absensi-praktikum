<div class="page-inner">

	<div class="page-header">
		<h4 class="page-title">Jadwal</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Jadwal Mengajar</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
		</ul>
	</div>


	<div class="row mt-4">

		<?php
		foreach ($mengajar as $jd) {
			?>
			<div class="col-md-6 col-xs-12">

				<div class="alert alert-info alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
					<strong>
						<h3>
							<?= $jd['nama_kelas']; ?>
						</h3>
					</strong>
					<hr>
					<ul>
						<li>
							Jenjang/Jurusan :
							<?= $jd['kode_jenjang']; ?> /
							<?= $jd['nama_program_studi']; ?>
						</li>
						<li>
							Nama Matakuliah Praktikum :
							<?= $jd['matakuliah']; ?>
						</li>
						<li>
							SKS :
							<?= $jd['sks']; ?>
						</li>
						<li>
							Kelas :
							<?= $jd['kode_program_studi'] ?> -
							<?= $jd['kode_kelompok']; ?>
						</li>
						<li>
							Hari :
							<?= $jd['hari']; ?>
						</li>
						<li>
							Jam Ke :
							<?= $jd['jamke']; ?>
						</li>
						<li>
							Waktu :
							<?= $jd['jam_mengajar']; ?>
						</li>
						<li>
							Ruangan :
							<?= $jd['nama_lab']; ?>
						</li>
						<li>
							Semester :
							<?= $jd['semester']; ?>
						</li>
						<li>
							Tahun Ajaran :
							<?= $jd['tahun_ajaran']; ?>
						</li>
					</ul>
					<hr>
					<a href="?page=absen&pelajaran=<?= $jd['id_mengajar'] ?> " class="btn btn-default btn-block text-left">
						<i class="fas fa-clipboard-check"></i>
						Isi Absen
					</a>
					<a href="?page=rekap&pelajaran=<?= $jd['id_mengajar'] ?> "
						class="btn btn-secondary btn-block text-left">
						<i class="fas fa-list-alt"></i>
						Rekap Absen
					</a>
				</div>
			</div>
		<?php } ?>

	</div>
	<a href="javascript:history.back()" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
</div>