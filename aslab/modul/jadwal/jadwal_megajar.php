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

	<!-- Filter berdasarkan hari -->
	<div class="col-md-12">
		<label for="filterHari">Pilih Hari:</label>
		<select id="filterHari" class="form-control">
			<option value="all">Semua Hari</option>
			<option value="Senin">Senin</option>
			<option value="Selasa">Selasa</option>
			<option value="Rabu">Rabu</option>
			<option value="Kamis">Kamis</option>
			<option value="Jumat">Jumat</option>
			<option value="Sabtu">Sabtu</option>
		</select>
	</div>

	<div class="row mt-4">
		<?php foreach ($mengajar as $jd) { ?>
			<!-- Tambahkan class "jadwal-item" untuk setiap item jadwal -->
			<div class="col-md-6 col-xs-12 jadwal-item" data-hari="<?= $jd['hari']; ?>">
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
						<i class="fas fa-clipboard-check"></i> Isi Absen
					</a>
					<a href="?page=rekap&pelajaran=<?= $jd['id_mengajar'] ?> "
						class="btn btn-secondary btn-block text-left">
						<i class="fas fa-list-alt"></i> Rekap Absen
					</a>
				</div>
			</div>
		<?php } ?>

	</div>
	<a href="javascript:history.back()" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
	// Fungsi untuk menyaring jadwal berdasarkan hari
	function filterJadwal() {
		var selectedHari = $("#filterHari").val();

		// Sembunyikan semua item jadwal
		$(".jadwal-item").hide();

		// Tampilkan item jadwal yang sesuai dengan hari yang dipilih
		if (selectedHari === "all") {
			$(".jadwal-item").show();
		} else {
			$(".jadwal-item[data-hari='" + selectedHari + "']").show();
		}
	}

	// Panggil fungsi filter saat nilai filter berubah
	$("#filterHari").change(filterJadwal);

	// Panggil fungsi filter saat halaman dimuat
	$(document).ready(filterJadwal);
</script>
