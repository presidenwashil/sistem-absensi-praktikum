<?php
// Halaman filter izin hari ini

// Ambil tanggal hari ini
$filteredDate = date('Y-m-d');

// Lakukan query untuk mendapatkan izin pada tanggal hari ini
$query = "SELECT * FROM tb_izin WHERE tanggal = '$filteredDate'";
$result = mysqli_query($con, $query);

// ...

// Tampilkan tabel dengan izin hari ini
?>
<div class="page-inner">
    <!-- Nav -->
    <div class="page-header">
        <h4 class="page-title">Izin Hari Ini</h4>
    </div>

    <!-- Tabel -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm" id="tabelIzin">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Praktikum</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Kelompok</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Bukti Izin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($l = mysqli_fetch_assoc($result)) {
                                // Ambil data lainnya sesuai kebutuhan
                                $id_mkelas = $l['id_mkelas'];
                                $id_mapel = $l['id_mapel'];
                                $kelas = mysqli_query($con, "SELECT nama_kelas FROM tb_mkelas WHERE id_mkelas = '$id_mkelas'");
                                $data_kelas = mysqli_fetch_assoc($kelas);
                                $mapel = mysqli_query($con, "SELECT mapel FROM tb_master_mapel WHERE id_mapel = '$id_mapel'");
                                $data_mapel = mysqli_fetch_assoc($mapel);
                                ?>
                                <tr>
                                    <td><b>
                                            <?= $no++; ?>.
                                        </b></td>
                                    <td>
                                        <?= $l['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $l['nim']; ?>
                                    </td>
                                    <td>
                                        <?= $data_mapel['mapel']; ?>
                                    </td>
                                    <td>
                                        <?= $data_kelas['nama_kelas']; ?>
                                    </td>
                                    <td>
                                        <?= $l['kelompok']; ?>
                                    </td>
                                    <td>
                                        <?= $l['tanggal']; ?>
                                    </td>
                                    <td>
                                        <?= $l['alasan']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $fileUrl = '../assets/public/izin/' . $l['surat_izin'];
                                        ?>
                                        <a class="btn btn-info btn-sm" href="<?php echo $fileUrl; ?>" target="_blank">Lihat
                                            Izin</a>
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