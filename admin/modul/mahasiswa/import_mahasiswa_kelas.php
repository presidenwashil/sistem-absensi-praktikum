<?php
// ...

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['csv_file'])) {
        $file_name = $_FILES['csv_file']['name'];
        $file_tmp = $_FILES['csv_file']['tmp_name'];

        // Pastikan file yang diunggah adalah file CSV
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (strtolower($file_ext) === 'csv') {
            // Baca file CSV dan tambahkan data ke tabel tb_mahasiswa_kelas
            $handle = fopen($file_tmp, "r");
            if ($handle !== FALSE) {
                $id_mkelas = mysqli_real_escape_string($con, $_POST['id_mkelas']);

                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Ambil NIM dari file CSV
                    $nim = mysqli_real_escape_string($con, $data[0]);

                    // Cari id_mahasiswa berdasarkan NIM
                    $query_search_mahasiswa = "SELECT id_mahasiswa FROM tb_mahasiswa WHERE nim = '$nim'";
                    $result_search_mahasiswa = mysqli_query($con, $query_search_mahasiswa);
                    $row_search_mahasiswa = mysqli_fetch_assoc($result_search_mahasiswa);

                    if ($row_search_mahasiswa) {
                        $id_mahasiswa = $row_search_mahasiswa['id_mahasiswa'];

                        // Tambahkan data ke tabel tb_mahasiswa_kelas dengan id_mkelas yang dipilih
                        $query = "INSERT INTO tb_mahasiswa_kelas (id_mahasiswa, id_mkelas) VALUES ('$id_mahasiswa', '$id_mkelas')";
                        mysqli_query($con, $query);
                    } else {
                        echo "Mahasiswa dengan NIM '$nim' tidak ditemukan.";
                    }
                }
                fclose($handle);

                // Redirect kembali ke halaman data.php atau halaman lain yang sesuai
                echo "<script>alert('Impor berhasil.'); window.location.replace('?page=mahasiswa')</script>";
                exit();
            } else {
                echo "<script>alert('Gagal membaca file CSV.'); window.location.replace('?page=mahasiswa')</script>";
            }
        } else {
            echo "<script>alert('Format file tidak valid. harap unggah file CSV.'); window.location.replace('?page=mahasiswa')</script>";
        }
    }
}
// ...

?>


<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Impor Mahasiswa ke Kelas</h4>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="col-sm-6">
                        <form action="?page=mahasiswa&act=import_kelas" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Pilih Kelas:</label>
                                <select name="id_mkelas" required>
                                    <option value="">Pilih Kelas</option>
                                    <?php
                                    // Query database untuk mendapatkan daftar nama kelas
                                    $query_kelas = "SELECT id_mkelas, nama_kelas FROM tb_mkelas";
                                    $result_kelas = mysqli_query($con, $query_kelas);

                                    while ($row_kelas = mysqli_fetch_assoc($result_kelas)) {
                                        echo '<option value="' . $row_kelas['id_mkelas'] . '">' . $row_kelas['nama_kelas'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih File CSV:</label>
                                <input type="file" name="csv_file" accept=".csv" required>
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