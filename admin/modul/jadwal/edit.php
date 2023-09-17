<?php
// Ambil data jadwal berdasarkan id dari URL
if (isset($_GET['id'])) {
    $id_mengajar = $_GET['id'];
    $jadwal = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tb_mengajar WHERE id_mengajar = $id_mengajar"));
}

$taAktif = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_thajaran WHERE status = 1 "));
$semAktif = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_semester WHERE status = 1 "));
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
                <a href="#">Edit Jadwal</a>
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
                        <input type="hidden" name="id" value="<?= $id_mengajar ?>">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kode">Kode Pelajaran</label>
                                    <input name="kode" type="text" class="form-control" id="kode"
                                        value="<?= $jadwal['kode_pelajaran'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tahun Ajaran</label>
                                    <input type="text" class="form-control" value="<?= $taAktif['tahun_ajaran'] ?>"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kode">Semester</label>
                                    <input type="text" class="form-control" value="<?= $semAktif['semester'] ?>"
                                        readonly>
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
                                        $aslab = mysqli_query($con, "SELECT * FROM tb_aslab ORDER BY id_aslab ASC");
                                        foreach ($aslab as $g) {
                                            $selected = ($g['id_aslab'] == $jadwal['id_aslab']) ? 'selected' : '';
                                            echo "<option value='$g[id_aslab]' $selected>$g[nama_aslab]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hari">Hari</label>
                                    <input class="form-control" type="text" name="hari" id="hari"
                                        value="<?= $jadwal['hari'] ?>">
                                </div>
                                <!-- Tambahkan bagian form lainnya sesuai dengan kebutuhan -->
                            </div>
                            <div class="col-md-6">
                                <!-- Praktikum -->
                                <div class="form-group">
                                    <label>Praktikum</label>
                                    <select name="matakuliah" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <?php
                                        $matakuliah = mysqli_query($con, "SELECT * FROM tb_matakuliah ORDER BY id_matakuliah ASC");
                                        foreach ($matakuliah as $g) {
                                            $selected = ($g['id_matakuliah'] == $jadwal['id_matakuliah']) ? 'selected' : '';
                                            echo "<option value='$g[id_matakuliah]' $selected>[ $g[kode_matakuliah] ] $g[matakuliah]</option>";
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
                                        $laboratorium = mysqli_query($con, "SELECT * FROM tb_laboratorium ORDER BY id_lab ASC");
                                        foreach ($laboratorium as $g) {
                                            $selected = ($g['id_lab'] == $jadwal['id_lab']) ? 'selected' : '';
                                            echo "<option value='$g[id_lab]' $selected>[ $g[kd_lab] ] $g[nama_lab]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!-- Kelas -->
                                <div class="form-group">
                                    <label>Kelompok</label>
                                    <select name="kelas" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <?php
                                        $kelas = mysqli_query($con, "SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
                                        foreach ($kelas as $g) {
                                            $selected = ($g['id_mkelas'] == $jadwal['id_mkelas']) ? 'selected' : '';
                                            echo "<option value='$g[id_mkelas]' $selected>$g[nama_kelas]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="waktu">Waktu</label>
                                    <input name="jam_mengajar" type="text" class="form-control" id="jam_mengajar"
                                        value="<?= $jadwal['jam_mengajar'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jamke">Sesi</label>
                                    <input name="jamke" type="text" class="form-control" id="jamke"
                                        value="<?= $jadwal['jamke'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="update" class="btn btn-secondary">
                                        <i class="far fa-save"></i> Update
                                    </button>
                                    <a href="javascript:history.back()" class="btn btn-danger">
                                        <i class="fas fa-angle-double-left"></i> Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    // Proses update data saat tombol update ditekan
                    if (isset($_POST['update'])) {
                        // Ambil data dari form
                        $id = $_POST['id'];
                        $kode = $_POST['kode'];
                        $aslab = $_POST['aslab'];
                        $matakuliah = $_POST['matakuliah'];
                        $hari = $_POST['hari'];
                        $lab = $_POST['lab'];
                        $kelas = $_POST['kelas'];
                        $jam_mengajar = $_POST['jam_mengajar'];
                        $jamke = $_POST['jamke'];

                        // Lakukan proses update data ke database
                        $update = mysqli_query($con, "UPDATE tb_mengajar SET kode_pelajaran = '$kode', id_aslab = '$aslab', id_matakuliah = '$matakuliah', hari = '$hari', id_lab = '$lab', id_mkelas = '$kelas', jam_mengajar = '$jam_mengajar', jamke = '$jamke' WHERE id_mengajar = $id");

                        if ($update) {
                            echo "
            <script type='text/javascript'>
            setTimeout(function () { 

            swal('Sukses', 'Jadwal berhasil diperbarui', {
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