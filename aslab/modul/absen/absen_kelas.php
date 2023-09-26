<?php
// tampilkan data mengajar
$kelasMengajar = mysqli_query($con, "SELECT * FROM tb_mengajar 

	INNER JOIN tb_aslab ON tb_mengajar.id_aslab=tb_aslab.id_aslab
	INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
	INNER JOIN tb_laboratorium ON tb_mengajar.id_lab=tb_laboratorium.id_lab
	INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
	INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
	INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
	WHERE tb_mengajar.id_aslab='$data[id_aslab]' AND tb_mengajar.id_mengajar='$_GET[pelajaran]'  AND tb_thajaran.status=1  ");

foreach ($kelasMengajar as $d)

?>

<div class="page-inner">
	<div class="page-header">
		<!-- <h4 class="page-title">KELAS (<?= strtoupper($d['nama_kelas']) ?> )</h4> -->
		<ul class="breadcrumbs" style="font-weight: bold;">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">KELAS (
					<?= strtoupper($d['nama_kelas']) ?> )
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">
					<?= strtoupper($d['matakuliah']) ?>
				</a>
			</li>
		</ul>
	</div>


	<div class="row">
		<div class="card">
			<div class="card-body">
				<form action="" method="post" id="absenForm">
					<p>
						<span class="badge badge-default" style="padding: 7px;font-size: 14px;">
							<b>Daftar Hadir Mahasiswa</b>
						</span>
					</p>

					<div class="card-list">
						<input type="date" name="tgl" class="form-control" value="<?= date('Y-m-d') ?>"
							style="background-color: #212121;color: #FFEB3B;">

						<div class="mt-3">
							<input type="number" name="pertemuan_ke" class="form-control" placeholder="pertemuan ke:"
								required>
						</div>
						<?php

						// tampilakan data mahasiswa berdasarkan kelas yang dipilih
						
						$mahasiswa = mysqli_query($con, "SELECT * FROM tb_mahasiswa
						INNER JOIN tb_mahasiswa_kelas ON tb_mahasiswa.id_mahasiswa = tb_mahasiswa_kelas.id_mahasiswa
						WHERE tb_mahasiswa_kelas.id_mkelas = '$d[id_mkelas]'
						ORDER BY tb_mahasiswa.id_mahasiswa ASC");
						$jumlahSiswa = mysqli_num_rows($mahasiswa); foreach ($mahasiswa as $i => $s) {
							?>

							<div class="item-list">
								<div class="avatar">
									<img src="../assets/img/user/<?= $s['foto'] ?>" class="avatar-img rounded-circle">
								</div>

								<div class="info-user">
									<div class="username">
										<b class="text-success">
											<?= $s['nama_mahasiswa'] ?>
										</b>
										<?php
										// tampilkan data yg sudah absen
										$tgl_hari_ini = date('Y-m-d');
										$mahasiswa_telah_absen_hari_ini = mysqli_query($con, "SELECT * FROM _logabsensi INNER JOIN tb_mahasiswa ON _logabsensi.id_mahasiswa=tb_mahasiswa.id_mahasiswa WHERE _logabsensi.id_mahasiswa='$s[id_mahasiswa]' AND _logabsensi.tgl_absen='$tgl_hari_ini' AND _logabsensi.id_mengajar='$_GET[pelajaran]' AND _logabsensi.ket='' ");
										if (mysqli_num_rows($mahasiswa_telah_absen_hari_ini) < 1) {

											// echo '<span class="badge badge-danger">Belum Absen</span>';
									
										}
										?>
										(<code><?= $s['nim'] ?></code>)
										<input type="hidden" name="id_mahasiswa<?= $i; ?>"
											value="<?= $s['id_mahasiswa'] ?>">
										<input type="hidden" name="pelajaran" value="<?= $_GET['pelajaran'] ?>">
									</div>
									<div class="status mt-0">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio" value="H"
													required>
												<span class="form-check-sign">H</span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio"
													value="I">
												<span class="form-check-sign">I</span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio"
													value="S">
												<span class="form-check-sign">S</span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio"
													value="T">
												<span class="form-check-sign">T</span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio"
													value="A">
												<span class="form-check-sign">A</span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="ket-<?= $i; ?>" class="form-check-input" type="radio"
													value="O">
												<span class="form-check-sign">O</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<div class="mt-3" id="select-container">
							<label for="kode_aslab">Pilih Kode Aslab:</label>
							<select class="form-control" id="kode_aslab1" name="kode_aslab[]" required>
								<option value="" disabled selected>Pilih kode aslab</option>
								<option value="ER">ER</option>
								<option value="DF">DF</option>
								<option value="RN">RN</option>
								<option value="RZ">RZ</option>
								<option value="ZD">ZD</option>
								<option value="TA">TA</option>
								<option value="FI">FI</option>
								<option value="AD">AD</option>
								<option value="NK">NK</option>
								<option value="DY">DY</option>
								<option value="SG">SG</option>
								<option value="BY">BY</option>
								<option value="FO">FO</option>
								<option value="FZ">FZ</option>
								<option value="SP">SP</option>
								<option value="RF">RF</option>
								<option value="MC">MC</option>
								<option value="SK">SK</option>
								<option value="HF">HF</option>
								<option value="RG">RG</option>
								<!-- Tambahkan pilihan kode aslab lainnya sesuai kebutuhan -->
							</select>
						</div>


						<div class="mt-3">
							<input type="text" class="form-control" name="materi"
								placeholder="Isikan materi praktikum hari ini" required>
						</div>
					</div>
					<center>
						<button type="submit" name="absen" class="btn btn-success" form="absenForm">
							<i class="fa fa-check"></i> Selesai
						</button>
						<a href="?page=jadwal" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i>
							Kembali</a>
						<!-- <a href="?page=absen&act=update&pelajaran=<?= $_GET['pelajaran']; ?>" class="btn btn-warning"><i
								class="fas fa-edit"></i> Update Absesnsi</a> -->
						<!-- <a href="?page=jadwal" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i>
							Kembali</a> -->
					</center>
				</form>
			</div>
		</div>

		<?php
		if (isset($_POST['absen'])) {

			$total = $jumlahSiswa - 1;
			$today = $_POST['tgl'];
			$pertemuan = $_POST['pertemuan_ke'];
			$kode_aslab = implode(",", $_POST['kode_aslab']); // Gabungkan kode aslab dengan tanda koma
			$materi = $_POST['materi'];

			for ($i = 0; $i <= $total; $i++) {

				$id_mahasiswa = $_POST['id_mahasiswa' . $i];
				$pelajaran = $_POST['pelajaran'];
				$ket = $_POST['ket-' . $i];

				$cekAbsesnHariIni = mysqli_num_rows(mysqli_query($con, "SELECT * FROM _logabsensi WHERE pertemuan_ke ='$pertemuan' AND id_mengajar='$pelajaran' AND id_mahasiswa='$id_mahasiswa' "));

				if ($cekAbsesnHariIni > 0) {
					echo "
                <script type='text/javascript'>
                setTimeout(function () { 

                swal('Sorry!', 'Absen Hari ini sudah dilakukan', {
                icon : 'error',
                buttons: {        			
                confirm: {
                className : 'btn btn-danger'
                }
                },
                });    
                },10);  
                window.setTimeout(function(){ 
                window.location.replace('?page=absen&pelajaran=$_GET[pelajaran]');
                } ,3000);   
                </script>";

				} else {

					$insert = mysqli_query($con, "INSERT INTO _logabsensi VALUES (NULL,'$pelajaran','$id_mahasiswa','$today','$ket','$pertemuan','$materi','$kode_aslab')");

					if ($insert) {

						echo "
                    <script type='text/javascript'>
                    setTimeout(function () { 

                    swal('Berhasil', 'Absen hari ini telah tersimpan!', {
                    icon : 'success',
                    buttons: {        			
                    confirm: {
                    className : 'btn btn-success'
                    }
                    },
                    });    
                    },10);  
                    window.setTimeout(function(){ 
                    window.location.replace('?page=absen&pelajaran=$_GET[pelajaran]');
                    } ,3000);   
                    </script>";
					}
				}
			}
		}

		?>
	</div>
</div>

<script>
	// Mendapatkan elemen HTML yang diperlukan
	const selectContainer = document.getElementById("select-container");

	// Daftar pilihan kode aslab yang dapat ditampilkan
	const kodeAslabOptions = [
		"ER",
		"DF",
		"RN",
		"RZ",
		"ZD",
		"TA",
		"FI",
		"AD",
		"NK",
		"DY",
		"SG",
		"BY",
		"FO",
		"FZ",
		"SP",
		"RF",
		"MC",
		"SK",
		"HF",
		"RG",
	];

	// Event listener untuk menambahkan input select baru saat kode aslab pertama dipilih
	document.addEventListener("change", function (event) {
		// Cek apakah perubahan terjadi pada input select yang memiliki class "form-control"
		if (
			event.target.tagName === "SELECT" &&
			event.target.classList.contains("form-control")
		) {
			tambahInputSelect();
		}
	});

	// Fungsi untuk menambahkan input select baru
	function tambahInputSelect() {
		const div = document.createElement("div");
		div.classList.add("select-group"); // Tambahkan class "select-group" ke div baru
		const select = document.createElement("select");
		select.classList.add("form-control"); // Tambahkan class "form-control" ke input select
		select.name = "kode_aslab[]";

		// Tambahkan opsi pertama dengan nilai kosong (kosong yang terpilih)
		const emptyOption = document.createElement("option");
		emptyOption.value = "";
		emptyOption.textContent = "Pilih kode aslab";
		emptyOption.selected = true; // Buat yang pertama terpilih
		emptyOption.disabled = true; // Jadikan yang pertama disabled
		select.appendChild(emptyOption);

		kodeAslabOptions.forEach((option) => {
			const optionElement = document.createElement("option");
			optionElement.value = option;
			optionElement.textContent = option;
			select.appendChild(optionElement);
		});

		div.appendChild(select);
		selectContainer.appendChild(div);
	}
</script>