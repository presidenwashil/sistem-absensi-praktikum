<?php 
$taAktif = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tb_thajaran WHERE status=1 "));
$semAktif = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tb_semester WHERE status=1 "));

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
												<input name="kode" type="text" class="form-control" id="kode" value="MPL-<?=time();?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Tahun Ajaran</label>
												<input type="hidden" name="ta" value="<?=$taAktif['id_thajaran'] ?>">
												<input type="hidden" name="semester" value="<?=$semAktif['id_semester'] ?>">
												<input type="text" class="form-control" placeholder="<?=$taAktif['tahun_ajaran'] ?>" readonly>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="kode">Semester</label>
												<input type="text" class="form-control" placeholder="<?=$semAktif['semester'] ?>" readonly>
											</div>
										</div>
									</div>

									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Asisten Lab</label>
											<select name="aslab" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$aslab = mysqli_query($con,"SELECT * FROM tb_aslab ORDER BY id_aslab ASC");
												foreach ($aslab as $g) {
													echo "<option value='$g[id_aslab]'>$g[nama_aslab]</option>";
												}
												 ?>
												
											</select>
											<!-- <select name="guru" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$aslab = mysqli_query($con,"SELECT * FROM tb_aslab ORDER BY id_aslab ASC");
												foreach ($aslab as $g) {
													echo "<option value='$g[id_aslab]'>$g[nama_aslab]</option>";
												}
												 ?>
												
											</select> -->
										</div>
									</div>

									<div class="col-md-6">
										<!-- Praktikum -->
										<div class="form-group">
											<label>Praktikum</label>
											<select name="mapel" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$mapel = mysqli_query($con,"SELECT * FROM tb_master_mapel ORDER BY id_mapel ASC");
												foreach ($mapel as $g) {
													echo "<option value='$g[id_mapel]'>[ $g[kode_mapel] ] $g[mapel]</option>";
												}
												 ?>
												
											</select>
										</div>
										<!-- Laboratorium -->
										<div class="form-group">
											<label>Laboratorium</label>
											<select name="lab" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$mapel = mysqli_query($con,"SELECT * FROM tb_laboratorium ORDER BY id_lab ASC");
												foreach ($mapel as $g) {
													echo "<option value='$g[id_lab]'>[ $g[kd_lab] ] $g[nama_lab]</option>";
												}
												 ?>
												
											</select>
										</div>
										<!-- Kelas -->
										<!-- <div class="form-group">
											<label>Kelas</label>
											<select name="mkelas" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$kelas = mysqli_query($con,"SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
												foreach ($kelas as $g) {
													echo "<option value='$g[id_mkelas]'>$g[nama_kelas]</option>";
												}
												 ?>
												
											</select>
										</div> -->
										
									</div>
								</div>


									<div class="row">
									<div class="col-md-6">											
											<div class="form-check">
												<label>Hari</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Senin">
													<span class="form-radio-sign">Senin</span>
												</label>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Selasa">
													<span class="form-radio-sign">Selasa</span>
												</label>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Rabu">
													<span class="form-radio-sign">Rabu</span>
												</label>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Kamis">
													<span class="form-radio-sign">Kamis</span>
												</label>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Jum'at">
													<span class="form-radio-sign">Jum'at</span>
												</label>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="hari" value="Sabtu">
													<span class="form-radio-sign">Sabtu</span>
												</label>

											</div>
										</div>
										<div class="col-md-6">	
												<label>Kelas</label>
											<select name="kelas" class="form-control">
												<option value="">- Pilih -</option>
												<?php 
												$kelas = mysqli_query($con,"SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
												foreach ($kelas as $g) {
													echo "<option value='$g[id_mkelas]'>$g[nama_kelas]</option>";
												}
												 ?>
												
											</select>


										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="waktu">Waktu</label>
												<input name="waktu" type="text" class="form-control" id="waktu" placeholder="00.00 - 00.00">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="jamke">Jam Ke</label>
												<input name="jamke" type="text" class="form-control" id="jamke" placeholder="1 - 10">
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
							

									$kode = $_POST['kode'];
									$ta = $_POST['ta'];
									$semester = $_POST['semester'];
									$aslab = $_POST['aslab'];
									$mapel = $_POST['mapel'];
									$hari = $_POST['hari'];
									$lab = $_POST['lab'];
									$kelas = $_POST['kelas'];
									$waktu = $_POST['waktu'];
									$jamke = $_POST['jamke'];

						$insert = mysqli_query($con,"INSERT INTO tb_mengajar VALUES (NULL,'$kode','$hari','$waktu','$jamke','$aslab','$mapel','$lab','$kelas','$semester','$ta' ) ");

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
								}
						}


						?>

							

</div>

</div>
</div>
</div>
</div>
</div>