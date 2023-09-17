<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Izin</h4>
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
                <a href="#">Izin Mahasiswa</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Daftar Izin Hari Ini</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table">
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
                                $filteredDate = isset($_GET['filterHariIni']) ? date('Y-m-d') : null; // Ambil tanggal hari ini jika tombol Filter Hari Ini diklik, jika tidak, set null
                                $query = "SELECT * FROM tb_izin";

                                if ($filteredDate) {
                                    $query .= " WHERE tanggal = '$filteredDate'";
                                }

                                $lab = mysqli_query($con, $query);
                                $no = 1;

                                while ($l = mysqli_fetch_assoc($lab)) {
                                    $id_mkelas = $l['id_mkelas'];
                                    $id_matakuliah = $l['id_matakuliah'];
                                    $kelas = mysqli_query($con, "SELECT nama_kelas FROM tb_mkelas WHERE id_mkelas = '$id_mkelas'");
                                    $data_kelas = mysqli_fetch_assoc($kelas);
                                    $matakuliah = mysqli_query($con, "SELECT matakuliah FROM tb_matakuliah WHERE id_matakuliah = '$id_matakuliah'");
                                    $data_matakuliah = mysqli_fetch_assoc($matakuliah);
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
                                            <?= $data_matakuliah['matakuliah']; ?>
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
                                            <a class="btn btn-info btn-sm" href="<?php echo $fileUrl; ?>"
                                                target="_blank">Lihat
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
</div>