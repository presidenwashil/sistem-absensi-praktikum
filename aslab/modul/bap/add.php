<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Berita Acara Praktikum</h4>
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
                <a href="#">Data Berita Acara Praktikum</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Berita Acara Praktikum</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Form Entry Berita Acara Praktikum</h3>
                </div>
                <div class="card-body">
                    <form action="?page=aslab&act=proses" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Jenjang</label>
                            <input name="jenjang" type="text" class="form-control" placeholder="S1">
                        </div>

                        <div class="form-group">
                            <label>Jurusan</label>
                            <input name="jurusan" type="text" class="form-control" placeholder="Teknik Informatika">
                        </div>

                        <div class="form-group">
                            <label>Nama Mata Kuliah Praktikum</label>
                            <input name="matkul" type="text" class="form-control" placeholder="Pemrograman Web">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input name="sks" type="text" class="form-control" placeholder="2">
                        </div>

                        <div class="form-group">
                            <label>Kelas</label>
                            <input name="kelas" type="text" class="form-control" placeholder="Pagi A">
                        </div>

                        <div class="form-group">
                            <label>Kelompok</label>
                            <input name="kelompok" type="text" class="form-control" placeholder="1">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Peserta Yang Terdaftar</label>
                            <input name="jml_hadir" type="text" class="form-control" placeholder="20">
                        </div>

                        <div class="form-group">
                            <label>Hari/Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Waktu Mulai</label>
                            <input name="tanggal" type="time" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <input name="tanggal" type="time" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Ruangan</label>
                            <input name="tanggal" type="text" class="form-control" placeholder="Lab Pemrograman">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Peserta Yang Hadir</label>
                            <input name="jml_absen" type="text" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Peserta Yang Tidak Hadir</label>
                            <input name="tanggal" type="text" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Materi Yang Di Sampaikan</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">
                        </div>

                        <div class="form-group">
                            <label>Catatan</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">
                        </div>

                        <div class="form-group">
                            <label>Nama Aslab</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">
                        </div>

                        <div class="form-group">
                            <button name="saveAslab" type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                Simpan</button>
                            <a href="javascript:history.back()" class="btn btn-warning"><i
                                    class="fa fa-chevron-left"></i> Batal</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Mengambil data dari formulir
$jenjang = $_POST['jenjang'];
$jurusan = $_POST['jurusan'];
$matkul = $_POST['matkul'];
$sks = $_POST['sks'];
$kelas = $_POST['kelas'];
$kelompok = $_POST['kelompok'];
$jml_hadir = $_POST['jml_hadir'];
$tanggal = $_POST['tanggal'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];
$ruangan = $_POST['ruangan'];
$jml_absen = $_POST['jml_absen'];
$materi = $_POST['materi'];
$catatan = $_POST['catatan'];
$nama_aslab = $_POST['nama_aslab'];

// Query SQL untuk memasukkan data ke dalam tabel tb_berita_acara
$insert = mysqli_query($con, "INSERT INTO tb_berita_acara (jenjang, jurusan, id_matakuliah, sks, kelas, kelompok, id_presensi, wkt_masuk, wkt_keluar, id_laboratorium, materi, catatan, id_dosen)
VALUES ('$jenjang', '$jurusan', '$matkul', '$sks', '$kelas', '$kelompok', , '$waktu_mulai', '$waktu_selesai', '$ruangan', '$materi', '$catatan', NULL)");

if ($conn->query($sql) === TRUE) {
    echo "Data Berita Acara Praktikum berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>