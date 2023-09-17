<?php
// Ambil ID kelas dari query parameter
$id_kelas = $_GET['id_mengajar'];

foreach ($kehadiran as $rk) {

}
?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h1>
					<?= $rk['matakuliah'] ?>
				</h1>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="basic-datatables" class="display table">
						<thead>
							<tr>
								<th>NO</th>
								<th>MATERI</th>
								<th>TANGGAL</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$id_login = @$_SESSION['mahasiswa'];
							$sql = mysqli_query($con, "SELECT * FROM tb_mahasiswa WHERE tb_mahasiswa.id_mahasiswa = '$id_login'") or die(mysqli_error($con));
							$data = mysqli_fetch_array($sql);
							// Periksa apakah parameter 'pelajaran' ada dalam URL
							if (isset($_GET['pelajaran'])) {

								$id_mengajar = $_GET['pelajaran'];
								// Tampilkan data kehadiran berdasarkan id_mengajar dan id_mahasiswa
								$kehadiran = mysqli_query($con, "SELECT la.pertemuan_ke, la.materi, la.tgl_absen, la.ket FROM _logabsensi la WHERE la.id_mengajar = '$id_mengajar' AND la.id_mahasiswa = '$id_login'");

								// Tampilkan daftar kehadiran dalam tabel
								if (!$kehadiran) {
									die("Query gagal: " . mysqli_error($con));
								}
							}


							while ($row = mysqli_fetch_assoc($kehadiran)) {
								?>
								<tr>
									<td>
										<?= $no++; ?>.
									</td>
									<td>
										<?php echo $row['materi']; ?>
									</td>
									<td>
										<?php echo $row['tgl_absen']; ?>
									</td>
									<td>
										<?php echo $row['ket']; ?>
									</td>
								</tr>
								<?php
							}

							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>