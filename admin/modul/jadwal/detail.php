<?php
// detail.php

// Ambil id_mengajar dari URL menggunakan $_GET
if (isset($_GET['id'])) {
    $id_mengajar = $_GET['id'];

    // Lakukan query untuk mendapatkan data jadwal praktikum berdasarkan id
    $query = "SELECT * FROM tb_mengajar
              INNER JOIN tb_aslab ON tb_mengajar.id_aslab=tb_aslab.id_aslab
              INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
              INNER JOIN tb_laboratorium ON tb_mengajar.id_lab=tb_laboratorium.id_lab
              INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
              INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
              INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
              WHERE tb_mengajar.id_mengajar = $id_mengajar";

    $result = mysqli_query($con, $query);
    // Periksa hasil query
    if (!$result) {
        echo "Query error: " . mysqli_error($con);
        exit();
    }
    // Ambil data dari hasil query
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Jadwal Praktikum</title>
    <!-- Tambahkan link ke CSS atau framework CSS yang digunakan -->
</head>

<body>
    <!-- <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail</h4>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <h1>Detail Jadwal Praktikum</h1>

                    <?php if ($data): ?>
                        <p><strong>Kode Jadwal:</strong>
                            <?= $data['kode_pelajaran']; ?>
                        </p>
                        <p><strong>Hari:</strong>
                            <?= $data['hari']; ?>
                        </p>
                        <p><strong>Sesi:</strong>
                            <?= $data['jamke']; ?>
                        </p>
                        <p><strong>Waktu:</strong>
                            <?= $data['jam_mengajar']; ?>
                        </p>
                        <p><strong>Nama Aslab:</strong>
                            <?= $data['nama_aslab']; ?>
                        </p>
                        <p><strong>Matakuliah:</strong>
                            <?= $data['matakuliah']; ?>
                        </p>
                        <p><strong>Laboratorium:</strong>
                            <?= $data['nama_lab']; ?>
                        </p>
                        <p><strong>Kelompok:</strong>
                            <?= $data['nama_kelas']; ?>
                        </p>
                        <p><strong>TP/Semester:</strong>
                            <?= $data['tahun_ajaran'] . "/" . $data['semester']; ?>
                        </p>
                        <!-- Tambahkan informasi lain yang diperlukan -->
                    <?php else: ?>
                        <p>Data tidak ditemukan.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
    </div>


</body>

</html>