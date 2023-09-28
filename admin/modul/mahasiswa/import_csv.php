<?php
// import_csv.php

// Hubungkan ke database
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['csv_file'])) {
        $file_name = $_FILES['csv_file']['name'];
        $file_tmp = $_FILES['csv_file']['tmp_name'];

        // Pastikan file yang diunggah adalah file CSV
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (strtolower($file_ext) === 'csv') {
            // Baca file CSV dan tambahkan data ke tabel tb_mahasiswa
            $handle = fopen($file_tmp, "r");
            if ($handle !== FALSE) {
                $successCount = 0;
                $duplicateCount = 0;

                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if (count($data) != 4) {
                        echo "<script>alert('Format data tidak valid. Harap periksa file CSV Anda.'); window.location.replace('?page=mahasiswa')</script>";
                        exit();
                    }

                    $nim = mysqli_real_escape_string($con, $data[0]);
                    $nama_mahasiswa = mysqli_real_escape_string($con, $data[1]);
                    $raw_password = mysqli_real_escape_string($con, $data[2]);
                    $foto = mysqli_real_escape_string($con, $data[3]);

                    $password = sha1($raw_password);
                    $status = 1;

                    // Cek apakah data dengan nim yang sama sudah ada dalam tabel
                    $query_check = "SELECT COUNT(*) FROM tb_mahasiswa WHERE nim = '$nim'";
                    $result_check = mysqli_query($con, $query_check);
                    $row_check = mysqli_fetch_array($result_check);

                    if ($row_check[0] == 0) {
                        // Data dengan nim yang sama tidak ada, tambahkan data ke tabel
                        $query_insert = "INSERT INTO tb_mahasiswa (nim, nama_mahasiswa, password, foto, status) VALUES ('$nim', '$nama_mahasiswa', '$password', '$foto', '$status')";
                        mysqli_query($con, $query_insert);
                        $successCount++;
                    } else {
                        // Data dengan nim yang sama sudah ada, catat sebagai duplikat
                        $duplicateCount++;
                    }
                }

                fclose($handle);

                if ($successCount > 0) {
                    echo "<script>alert('Impor berhasil. $successCount data berhasil diimpor. $duplicateCount data sudah ada dan tidak diimpor.'); window.location.replace('?page=mahasiswa')</script>";
                } else {
                    echo "<script>alert('Impor gagal. Semua data sudah ada dalam tabel.'); window.location.replace('?page=mahasiswa')</script>";
                }

                // Redirect kembali ke halaman data.php
                exit();
            } else {
                echo "<script>alert('Impor gagal.'); window.location.replace('?page=mahasiswa')</script>";
            }
        } else {
            echo "<script>alert('Format file tidak valid. Harap unggah file CSV.'); window.location.replace('?page=mahasiswa')</script>";
        }
    }
}
?>


<!-- Tambahkan formulir untuk mengunggah file CSV -->
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Impor Data Mahasiswa</h4>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="col">
                        <form action="?page=mahasiswa&act=import_mahasiswa" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Pilih File: </label>
                                <input type="file" name="csv_file" accept=".csv">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Impor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>