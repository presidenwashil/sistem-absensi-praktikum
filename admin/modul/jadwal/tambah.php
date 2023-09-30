<?php
$taAktif = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_thajaran WHERE status=1 "));
$semAktif = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_semester WHERE status=1 "));

?>
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
				<a href="#">Jadwal Jaga</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Tambah Jadwal</a>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Form Elements</div>
				</div>
				<div class="card-body">
					<form action="" method="post">

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="kode">Kode Pelajaran</label>
									<input name="kode_pelajaran" type="text" class="form-control" id="kode"
										value="MPL-<?= time(); ?>" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Tahun Ajaran</label>
									<input type="hidden" name="ta" value="<?= $taAktif['id_thajaran'] ?>">
									<input type="hidden" name="semester" value="<?= $semAktif['id_semester'] ?>">
									<input type="text" class="form-control"
										placeholder="<?= $taAktif['tahun_ajaran'] ?>" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kode">Semester</label>
									<input type="text" class="form-control" placeholder="<?= $semAktif['semester'] ?>"
										readonly>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Asisten Lab</label>
									<select name="aslab" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php
										$aslab = mysqli_query($con, "SELECT * FROM tb_aslab ORDER BY id_aslab ASC");
										foreach ($aslab as $g) {
											echo "<option value='$g[id_aslab]'>$g[nama_aslab]</option>";
										}
										?>

									</select>
								</div>
								<div class="form-group">
									<label for="hari">Hari</label>
									<input class="form-control" type="text" name="hari" id="hari"
										placeholder="Masukkan hari" required>
								</div>

								<!-- Kelompok -->
								<div class="form-group">
									<label>Kelompok</label>
									<select name="kelompok" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php
										$kelompok = mysqli_query($con, "SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
										foreach ($kelompok as $kk) {
											echo "<option value='$kk[id_mkelas]'>$kk[nama_kelas]</option>";
										}
										?>

									</select>
								</div>

								<!-- Matakuliah -->
								<div class="form-group">
									<label>Matakuliah</label>
									<select name="matakuliah" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php
										$matakuliah = mysqli_query($con, "SELECT * FROM tb_matakuliah ORDER BY id_matakuliah ASC");
										foreach ($matakuliah as $g) {
											echo "<option value='$g[id_matakuliah]'>[ $g[kode_matakuliah] ] $g[matakuliah]</option>";
										}
										?>

									</select>
								</div>

								<!-- Laboratorium -->
								<div class="form-group">
									<label>Laboratorium</label>
									<select name="lab" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php
										$matakuliah = mysqli_query($con, "SELECT * FROM tb_laboratorium ORDER BY id_lab ASC");
										foreach ($matakuliah as $g) {
											echo "<option value='$g[id_lab]'>[ $g[kd_lab] ] $g[nama_lab]</option>";
										}
										?>

									</select>
								</div>

								<!-- Program Studi -->
								<div class="form-group">
									<label>Program Studi</label>
									<select name="program_studi" class="form-control">
										<option value="">- Pilih -</option>
										<?php
										$program_studi = mysqli_query($con, "SELECT * FROM tb_program_studi ORDER BY id_program_studi ASC");
										foreach ($program_studi as $ps) {
											echo "<option value='$ps[id_program_studi]'> $ps[nama_program_studi]</option>";
										}
										?>
									</select>
								</div>

								<!-- Jenjang -->
								<div class="form-group">
									<label>Jenjang</label>
									<select name="jenjang" class="form-control">
										<option value="">- Pilih -</option>
										<?php
										$jenjang = mysqli_query($con, "SELECT * FROM tb_jenjang ORDER BY id_jenjang ASC");
										foreach ($jenjang as $j) {
											echo "<option value='$j[id_jenjang]'> $j[nama_jenjang]</option>";
											?>
										<?php } ?>
									</select>
								</div>

								<!-- Kelas -->
								<div class="form-group">
									<label>Kelas</label>
									<select name="kelas" class="form-control">
										<option value="">- Pilih -</option>
										<?php
										$kelas = mysqli_query($con, "SELECT * FROM tb_kelompok ORDER BY id_kelompok ASC");
										foreach ($kelas as $ks) {
											echo "<option value='$ks[id_kelompok]'> $ks[nama_kelompok]</option>";
											?>
										<?php } ?>
									</select>
								</div>

								<!-- Waktu -->
								<div class="form-group">
									<label for="waktu">Waktu</label>
									<input name="jam_mengajar" type="text" class="form-control" id="waktu"
										placeholder="00.00 - 00.00">
								</div>

								<!-- Sesi -->
								<div class="form-group">
									<label for="jamke">Jam Ke</label>
									<input name="jamke" type="text" class="form-control" id="jamke"
										placeholder="1 - 10">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" name="save" class="btn btn-secondary">
										<i class="far fa-save"></i> Simpan
									</button>
									<a href="javascript:history.back()" class="btn btn-danger">
										<i class="fas fa-angle-double-left"></i> Kembali
									</a>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['save'])) {
						$kode = $_POST['kode_pelajaran'];
						$ta = $_POST['ta'];
						$semester = $_POST['semester'];
						$aslab = $_POST['aslab'];
						$matakuliah = $_POST['matakuliah'];
						$hari = $_POST['hari'];
						$lab = $_POST['lab'];
						$kelompok = $_POST['kelompok'];
						$kelas = $_POST['kelas'];
						$program_studi = $_POST['program_studi'];
						$jenjang = $_POST['jenjang'];
						$waktu = $_POST['jam_mengajar'];
						$jamke = $_POST['jamke'];

						$queryCheckKelompok = "SELECT * FROM tb_mkelas WHERE id_mkelas = '$kelompok'";
						$resultCheckKelompok = mysqli_query($con, $queryCheckKelompok);

						if (!$resultCheckKelompok || mysqli_num_rows($resultCheckKelompok) != 1) {
							// Handle the case where $kelompok is invalid
							echo "Invalid kelompok value or not found in tb_mkelas.";
						} else {
							// $kelompok is valid, proceed with the INSERT query
							$insert = mysqli_query($con, "INSERT INTO tb_mengajar (id_mengajar, kode_pelajaran, hari, jam_mengajar, jamke, id_aslab, id_matakuliah, id_lab, id_mkelas, id_kelompok, id_semester, id_thajaran, id_program_studi, id_jenjang) VALUES (NULL,'$kode','$hari','$waktu','$jamke','$aslab','$matakuliah','$lab','$kelompok','$kelas','$semester','$ta','$program_studi','$jenjang')");
							if ($insert) {
								echo "
								<script type='text/javascript'>
								setTimeout(function () { 

								swal('Sukses', 'Jadwal ditambahkan', {
								icon : 'success',
								buttons: {        			
								confirm: {
								className : 'btn btn-success'
								}
								},
								});    
								},10);  
								window.setTimeout(function(){ 
								window.location.replace('?page=jadwal');
								} ,3000);   
								</script>";
							} else {
								// Handle the case where the INSERT query fails
								echo "Error: " . mysqli_error($con);
							}
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>