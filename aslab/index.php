<?php
@session_start();
include '../config/db.php';

if (!isset($_SESSION['aslab'])) {
	?>
	<script>
		alert('Maaf ! Anda Belum Login !!');
		window.location = '../index.php';
	</script>
	<?php
}
?>


<?php
$id_login = @$_SESSION['aslab'];
$sql = mysqli_query($con, "SELECT * FROM tb_aslab
WHERE id_aslab = '$id_login'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);

// tampilkan data mengajar
$mengajar = mysqli_query($con, "SELECT * FROM tb_mengajar 

INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
INNER JOIN tb_laboratorium ON tb_mengajar.id_lab=tb_laboratorium.id_lab
INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
WHERE tb_mengajar.id_aslab='$data[id_aslab]' AND tb_thajaran.status=1 AND tb_semester.status=1 ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Aslab | Aplikasi Absensi Praktikum</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: { "families": ["Lato:300,400,700,900"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="purple">

				<a href="index.php" class="logo">
					<b class="text-white">Absensi Praktikum</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="purple2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">
									<?php
									// Ambil tanggal hari ini
									$todayDate = date("Y-m-d");

									// Mengambil jumlah notifikasi dari database berdasarkan izin yang masuk hari ini
									$count = mysqli_query($con, "SELECT COUNT(*) AS total FROM tb_izin WHERE tanggal = '$todayDate'");
									$row = mysqli_fetch_assoc($count);
									$totalNotifications = $row['total'];
									echo $totalNotifications;
									?>
								</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have
										<?php echo $totalNotifications; ?> new notification(s)
									</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<?php
											// Mengambil data notifikasi dari database berdasarkan izin yang masuk hari ini
											$todayDate = date("Y-m-d");
											$notifications = mysqli_query($con, "SELECT * FROM tb_izin WHERE tanggal = '$todayDate' ORDER BY id_izin DESC LIMIT 5");
											foreach ($notifications as $notification) {
												?>
												<a href="?page=izin">
													<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
													</div>
													<div class="notif-content">
														<span class="block">
															New surat izin from
															<?php echo $notification['nama']; ?>
														</span>
														<span class="time">
															<?php echo $notification['tanggal']; ?>
														</span>
													</div>
												</a>
												<?php
											}
											?>
										</div>
									</div>
								</li>

								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i
											class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>



						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..."
										class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/user/<?= $data['foto'] ?>"
													alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>
													<?= $data['nama_aslab'] ?>
												</h4>
												<p class="text-muted">
													<?= $data['email'] ?>
												</p>
												<a href="?page=jadwal" class="btn btn-xs btn-secondary btn-sm">Jadwal
													Mengajar</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="?page=akun">Akun Saya</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..."
								class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $data['nama_aslab'] ?>
									<span class="user-level">
										<?= $data['nia'] ?>
									</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="?page=akun">
											<span class="link-collapse">Akun Saya</span>
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-secondary">
						<li class="nav-item active">
							<a href="index.php" class="collapsed">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Main Utama</h4>
						</li>
						<li class="nav-item">
							<a href="?page=jadwal">
								<i class="fas fa-clipboard-check"></i>
								<p>Jadwal Mengajar</p>
							</a>

						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-clipboard-list"></i>
								<p>Presensi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<?php


									foreach ($mengajar as $dm) { ?>
										<li>
											<a href="?page=absen&pelajaran=<?= $dm['id_mengajar'] ?> ">
												<span class="sub-item">
													<?= strtoupper($dm['matakuliah']); ?>KELAS (
													<?= strtoupper($dm['nama_kelas']); ?>)
												</span>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="?page=izin">
								<i class="fa fa-exclamation-circle"></i>
								<p>Izin Mahasiswa</p>
							</a>

						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#rekapAbsen">
								<i class="fas fa-list-alt"></i>
								<p>Rekap Absen</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="rekapAbsen">
								<ul class="nav nav-collapse">
									<?php


									foreach ($mengajar as $dm) { ?>
										<li>
											<a href="?page=rekap&pelajaran=<?= $dm['id_mengajar'] ?> ">
												<span class="sub-item">
													<?= strtoupper($dm['matakuliah']); ?>KELAS (
													<?= strtoupper($dm['nama_kelas']); ?>)
												</span>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#beritaAcara">
								<i class="fas fa-list-alt"></i>
								<p>Berita Acara</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="beritaAcara">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=bap&act=add ">
											<span class="sub-item"> Buat Berita Acara </span>
										</a>
									</li>
									<li>
										<a href="?page=bap">
											<span class="sub-item"> Daftar Berita Acara </span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item active mt-3">
							<a href="logout.php" class="collapsed">
								<i class="fas fa-arrow-alt-circle-left"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<!-- Halaman dinamis -->
				<?php
				error_reporting();
				$page = @$_GET['page'];
				$act = @$_GET['act'];

				if ($page == 'absen') {
					if ($act == '') {
						include 'modul/absen/absen_kelas.php';
					} elseif ($act == 'surat_view') {
						include 'modul/absen/view_surat_izin.php';
					} elseif ($act == 'konfirmasi') {
						include 'modul/absen/konfirmasi_izin.php';
					} elseif ($act == 'update') {
						include 'modul/absen/absen_kelas_update.php';
					}
				} elseif ($page == 'izin') {
					if ($act == '') {
						include 'modul/izin/view_izin.php';
					} elseif ($act = 'filter') {
						include 'modul/izin/izin_hari_ini.php';
					}

				} elseif ($page == 'rekap') {
					if ($act == '') {
						include 'modul/rekap/rekap_absen.php';

					}
				} elseif ($page == 'bap') {
					if ($act == '') {
						include 'modul/bap/data.php';
					} elseif ($act == 'add') {
						include 'modul/bap/add.php';
					} elseif ($act == 'edit') {
						include 'modul/bap/edit.php';
					} elseif ($act == 'del') {
						include 'modul/bap/del.php';
					} elseif ($act == 'proses') {
						include 'modul/bap/proses.php';
					}
				} elseif ($page == 'jadwal') {
					if ($act == '') {
						include 'modul/jadwal/jadwal_megajar.php';

					}
				} elseif ($page == 'akun') {
					include 'modul/akun/akun.php';
				} elseif ($page == '') {
					include 'modul/home.php';
				} else {
					echo "<b>Tidak ada Halaman</b>";
				}


				?>


			</div>
			<footer class="footer">
				<div class="container">
					<div class="copyright ml-auto">
						&copy;
						<?php echo date('Y'); ?> Absensi Praktikum (<a href="index.php">Raihan Presiden Washil </a> |
						2023)
					</div>
				</div>
			</footer>
		</div>


	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>



	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>

	<script>
		$(document).ready(function () {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every(function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function (d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function () {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>



</body>

</html>