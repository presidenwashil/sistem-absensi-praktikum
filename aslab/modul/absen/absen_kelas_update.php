<?php
// Tampilkan data mengajar
$kelasMengajar = mysqli_query($con, "SELECT * FROM tb_mengajar 
INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
WHERE tb_mengajar.id_aslab='$data[id_aslab]' AND tb_mengajar.id_mengajar='$_GET[pelajaran]' AND tb_thajaran.status=1");

foreach ($kelasMengajar as $d) {
}
?>

<div class="page-inner">
    <div class="page-header">
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
        <div class="col-md-10 col-xs-12">
            <?php
            // Dapatkan pertemuan terakhir di tb izin
            $last_pertemuan = mysqli_query($con, "SELECT * FROM _logabsensi WHERE id_mengajar='$_GET[pelajaran]' GROUP BY pertemuan_ke ORDER BY pertemuan_ke DESC LIMIT 1");
            $cekPertemuan = mysqli_num_rows($last_pertemuan);
            $jml = mysqli_fetch_array($last_pertemuan);

            if ($cekPertemuan > 0) {
                $pertemuan_terakhir = $jml['pertemuan_ke'];
            } else {
                $pertemuan_terakhir = 0;
            }
            ?>

            <form method="post" action="">
                <div class="form-group">
                    <label for="selected_pertemuan">Pilih Pertemuan:</label>
                    <select class="form-control" name="selected_pertemuan" id="selected_pertemuan">
                        <?php
                        // Isi pilihan pertemuan berdasarkan data yang tersedia di database
                        for ($i = 1; $i <= $pertemuan_terakhir + 1; $i++) {
                            echo "<option value='$i'>Pertemuan $i</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="submit_pertemuan" class="btn btn-primary">
                    Pilih Pertemuan
                </button>
            </form>

            <?php
            if (isset($_POST['submit_pertemuan'])) {
                $selected_pertemuan = $_POST['selected_pertemuan'];

                // Query SQL untuk mengambil data absensi berdasarkan pertemuan yang dipilih
                $query_absensi = mysqli_query($con, "SELECT a.*, m.nama_mahasiswa, m.nim FROM _logabsensi a
                    INNER JOIN tb_mahasiswa m ON a.id_mahasiswa = m.id_mahasiswa
                    WHERE a.id_mengajar='$_GET[pelajaran]' AND a.pertemuan_ke='$selected_pertemuan'");

                if (mysqli_num_rows($query_absensi) > 0) {
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="">
                                    <input type="date" name="tgl" class="form-control" value="<?= date('Y-m-d') ?>"
                                        style="background-color: #212121;color: #FFEB3B;">

                                    <?php
                                    // Tampilkan data absensi dan formulir pengeditan sesuai dengan kebutuhan Anda
                                    foreach ($query_absensi as $absensi) {
                                        $mahasiswa_id = $absensi['id_mahasiswa'];
                                        $radio_name = "ket-$mahasiswa_id";
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $absensi['nim']; ?>
                                            </td>
                                            <td>
                                                <?= $absensi['nama_mahasiswa']; ?>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name; ?>" class="form-check-input" type="radio"
                                                            value="H" <?php if ($absensi['ket'] == 'H')
                                                                echo "checked"; ?>>
                                                        <span class="form-check-sign">H</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name; ?>" class="form-check-input" type="radio"
                                                            value="I" <?php if ($absensi['ket'] == 'I')
                                                                echo "checked"; ?>>
                                                        <span class="form-check-sign">I</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name; ?>" class="form-check-input" type="radio"
                                                            value="S" <?php if ($absensi['ket'] == 'S')
                                                                echo "checked"; ?>>
                                                        <span class="form-check-sign">S</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name; ?>" class="form-check-input" type="radio"
                                                            value="A" <?php if ($absensi['ket'] == 'A')
                                                                echo "checked"; ?>>
                                                        <span class="form-check-sign">A</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name; ?>" class="form-check-input" type="radio"
                                                            value="O" <?php if ($absensi['ket'] == 'O')
                                                                echo "checked"; ?>>
                                                        <span class="form-check-sign">O</span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    <div class="mt-3">
                                        <input type="text" class="form-control" name="kode_aslab"
                                            placeholder="Isikan kode aslab" value="<?= $d['kode_aslab'] ?>" required>
                                    </div>

                                    <div class="mt-3">
                                        <input type="text" class="form-control" name="materi"
                                            placeholder="Isikan materi praktikum hari ini" value="<?= $d['materi'] ?>" required>
                                    </div>

                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="update" class="btn btn-success">
                                                <i class="fa fa-check"></i> Update Absensi
                                            </button>
                                        </td>
                                    </tr>

                                    <?php
                                    // Tampilkan formulir keterangan untuk mahasiswa baru
                                    $query_mahasiswa_baru = mysqli_query($con, "SELECT * FROM tb_mahasiswa
                                        INNER JOIN tb_mahasiswa_kelas ON tb_mahasiswa.id_mahasiswa = tb_mahasiswa_kelas.id_mahasiswa
                                        WHERE tb_mahasiswa_kelas.id_mkelas = '$d[id_mkelas]'
                                        AND tb_mahasiswa.id_mahasiswa NOT IN (
                                            SELECT id_mahasiswa FROM _logabsensi
                                            WHERE id_mengajar='$_GET[pelajaran]' AND pertemuan_ke='$selected_pertemuan'
                                        )
                                    ");

                                    foreach ($query_mahasiswa_baru as $mahasiswa_baru) {
                                        $mahasiswa_id_baru = $mahasiswa_baru['id_mahasiswa'];
                                        $radio_name_mahasiswa_baru = "ket-mahasiswa-baru-$mahasiswa_id_baru";
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $mahasiswa_baru['nim']; ?>
                                            </td>
                                            <td>
                                                <?= $mahasiswa_baru['nama_mahasiswa']; ?>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name_mahasiswa_baru; ?>" class="form-check-input"
                                                            type="radio" value="H" checked>
                                                        <span class="form-check-sign">H</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name_mahasiswa_baru; ?>" class="form-check-input"
                                                            type="radio" value="I">
                                                        <span class="form-check-sign">I</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name_mahasiswa_baru; ?>" class="form-check-input"
                                                            type="radio" value="S">
                                                        <span class="form-check-sign">S</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name_mahasiswa_baru; ?>" class="form-check-input"
                                                            type="radio" value="A">
                                                        <span class="form-check-sign">A</span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input name="<?= $radio_name_mahasiswa_baru; ?>" class="form-check-input"
                                                            type="radio" value="O">
                                                        <span class="form-check-sign">O</span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <input type="hidden" name="selected_pertemuan" value="<?= $selected_pertemuan; ?>">
                                </form>
                            </tbody>
                        </table>
                    </div>
                    <?php
                } else {
                    echo "Data absensi untuk pertemuan ke-$selected_pertemuan tidak ditemukan.";
                }
            }


            if (isset($_POST['update'])) {
                $selected_pertemuan = $_POST['selected_pertemuan'];
                $materi = $_POST['materi'];
                $kode_aslab = $_POST['kode_aslab'];
                $today = $_POST['tgl'];

                // Loop melalui semua mahasiswa yang diabsen pada pertemuan yang dipilih
                $query_absensi = mysqli_query($con, "SELECT * FROM _logabsensi WHERE id_mengajar='$_GET[pelajaran]' AND pertemuan_ke='$selected_pertemuan'");

                $update_success = true;

                foreach ($query_absensi as $absensi) {
                    $mahasiswa_id = $absensi['id_mahasiswa'];
                    $radio_name = "ket-$mahasiswa_id";

                    // Mendapatkan nilai radio button yang dipilih (H, I, S, A, O)
                    $ket = isset($_POST[$radio_name]) ? $_POST[$radio_name] : '';

                    // Melakukan pembaruan data absensi
                    $update_absen = mysqli_query($con, "UPDATE _logabsensi SET materi='$materi', kode_aslab='$kode_aslab', tgl_absen='$today', ket='$ket' WHERE id_mengajar='$_GET[pelajaran]' AND id_mahasiswa='$mahasiswa_id' AND pertemuan_ke='$selected_pertemuan'");

                    // Cek apakah pembaruan berhasil untuk setiap mahasiswa
                    if (!$update_absen) {
                        $update_success = false;
                        break; // Hentikan perulangan jika ada kesalahan pembaruan
                    }
                }

                // Tambahkan data absensi untuk mahasiswa baru
                $query_mahasiswa_baru = mysqli_query($con, "SELECT * FROM tb_mahasiswa
                    INNER JOIN tb_mahasiswa_kelas ON tb_mahasiswa.id_mahasiswa = tb_mahasiswa_kelas.id_mahasiswa
                    WHERE tb_mahasiswa_kelas.id_mkelas = '$d[id_mkelas]'
                    AND tb_mahasiswa.id_mahasiswa NOT IN (
                        SELECT id_mahasiswa FROM _logabsensi
                        WHERE id_mengajar='$_GET[pelajaran]' AND pertemuan_ke='$selected_pertemuan'
                    )
                ");

                foreach ($query_mahasiswa_baru as $mahasiswa_baru) {
                    $mahasiswa_id_baru = $mahasiswa_baru['id_mahasiswa'];
                    $radio_name_mahasiswa_baru = "ket-mahasiswa-baru-$mahasiswa_id_baru";

                    // Mendapatkan nilai radio button yang dipilih untuk mahasiswa baru (H, I, S, A, O)
                    $ket_mahasiswa_baru = isset($_POST[$radio_name_mahasiswa_baru]) ? $_POST[$radio_name_mahasiswa_baru] : '';

                    // Tambahkan data absensi untuk mahasiswa baru
                    $insert_absen_mahasiswa_baru = mysqli_query($con, "INSERT INTO _logabsensi (id_mengajar, id_mahasiswa, pertemuan_ke, materi, kode_aslab, tgl_absen, ket) VALUES ('$_GET[pelajaran]', '$mahasiswa_id_baru', '$selected_pertemuan', '$materi', '$kode_aslab', '$today', '$ket_mahasiswa_baru')");

                    // Cek apakah penambahan berhasil untuk setiap mahasiswa baru
                    if (!$insert_absen_mahasiswa_baru) {
                        $update_success = false;
                        break; // Hentikan perulangan jika ada kesalahan penambahan
                    }
                }

                if ($update_success) {
                    echo '<script>
                            alert("Data absensi berhasil diperbarui.");
                            window.location.replace = "?page=absen&act=update&pelajaran=$_GET[pelajaran]"; // Ganti dengan URL halaman yang sesuai
                          </script>';
                } else {
                    echo '<script>
                            alert("Terjadi kesalahan saat memperbarui data absensi.");
                            window.location.replace = "?page=absen&act=update&pelajaran=$_GET[pelajaran]"; // Ganti dengan URL halaman yang sesuai
                          </script>';
                }
            }
            ?>


        </div>
    </div>
</div>