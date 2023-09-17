<?php
// tampilkan data mengajar
$kelasMengajar = mysqli_query($con, "SELECT * FROM tb_mengajar 

INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
INNER JOIN tb_dospem ON tb_mkelas.id_mkelas=tb_dospem.id_mkelas
INNER JOIN tb_dosen ON tb_dospem.id_dosen=tb_dosen.id_dosen

INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
WHERE tb_mengajar.id_mengajar='$_GET[pelajaran]' AND tb_thajaran.status=1");

?>

<div class="page-inner">

	<div class="page-header">
		<h4 class="page-title">Rekap Absen</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<?php foreach ($kelasMengajar as $d) { ?>
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
			<?php } ?>
		</ul>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12 mt-3">
			<?php foreach ($kelasMengajar as $d) { ?>
				<a target="_blank"
					href="modul/rekap/rekap_persemester.php?pelajaran=<?= $_GET['pelajaran'] ?>&kelas=<?= $d['id_mkelas'] ?>"
					style="text-decoration: none;" class="text-success">
					<div class="alert alert-success alert-dismissible" role="alert">
						<strong>REKAP SEMESTER (
							<?= strtoupper($d['semester']) ?> - <b>
								<?= strtoupper($d['tahun_ajaran']) ?>
							</b>)
						</strong>
					</div>
				</a>
			<?php } ?>
		</div>
	</div>

	<!-- ... (other parts of your code) ... -->

</div>