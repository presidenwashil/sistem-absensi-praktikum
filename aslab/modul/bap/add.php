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
                            <select name="jenjang" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php
                                $jenjang = mysqli_query($con, "SELECT * FROM tb_jenjang ORDER BY id_jenjang ASC");
                                foreach ($jenjang as $j) {
                                    echo "<option value='$j[id_jenjang]'> $j[nama_jenjang]</option>";
                                    ?>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Jurusan</label>

                            <select name="program_studi" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php
                                $program_studi = mysqli_query($con, "SELECT * FROM tb_program_studi ORDER BY id_program_studi ASC");
                                foreach ($program_studi as $ps) {
                                    echo "<option value='$ps[id_program_studi]'> $ps[nama_program_studi]</option>";
                                }
                                ?>
                            </select>

                        </div>

                        <!-- Matakuliah -->
                        <div class="form-group">
                            <label>Matakuliah</label>
                            <select name="matakuliah" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $matakuliah = mysqli_query($con, "SELECT * FROM tb_matakuliah ORDER BY id_matakuliah ASC");
                                foreach ($matakuliah as $g) {
                                    echo "<option value='$g[id_matakuliah]'>[ $g[kode_matakuliah] ] $g[matakuliah]</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input name="sks" type="text" class="form-control" placeholder="2">
                        </div>

                        <!-- Kelas -->
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="kelas" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php
                                $kelas = mysqli_query($con, "SELECT * FROM tb_kelompok ORDER BY id_kelompok ASC");
                                foreach ($kelas as $ks) {
                                    echo "<option value='$ks[id_kelompok]'> $ks[nama_kelompok]</option>";
                                    ?>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kelompok</label>
                            <select name="kelompok" id="" class="form-control">
                                <option value="" disabled selected>-- Pilih Kelompok --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>

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
                            <select name="wk_masuk" id="" class="form-control">
                                <option value="" disabled selected>-- Pilih --</option>
                                <option value="08.00">08.00</option>
                                <option value="09.30">09.30</option>
                                <option value="11.00">11.00</option>
                                <option value="12.30">12.30</option>
                                <option value="14.00">14.00</option>
                                <option value="15.30">15.30</option>
                                <option value="17.00">17.00</option>
                                <option value="19.00">19.00</option>
                                <option value="20.30">20.30</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <select name="wk_masuk" id="" class="form-control">
                                <option value="" disabled selected>-- Pilih --</option>
                                <option value="09.30">09.30</option>
                                <option value="11.00">11.00</option>
                                <option value="12.30">12.30</option>
                                <option value="14.00">14.00</option>
                                <option value="15.30">15.30</option>
                                <option value="17.00">17.00</option>
                                <option value="19.00">19.00</option>
                                <option value="20.30">20.30</option>
                                <option value="22.00">22.00</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Ruangan</label>
                            <select name="lab" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $matakuliah = mysqli_query($con, "SELECT * FROM tb_laboratorium ORDER BY id_lab ASC");
                                foreach ($matakuliah as $g) {
                                    echo "<option value='$g[id_lab]'>[ $g[kd_lab] ] $g[nama_lab]</option>";
                                }
                                ?>

                            </select>
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

                        <div class="mt-3" id="select-container">
                            <label for="kode_aslab">Pilih Kode Aslab:</label>
                            <select class="form-control" id="kode_aslab1" name="kode_aslab[]" required>
                                <option value="" disabled selected>Pilih kode aslab</option>
                                <option value="ER">ER</option>
                                <option value="DF">DF</option>
                                <option value="RN">RN</option>
                                <option value="RZ">RZ</option>
                                <option value="ZD">ZD</option>
                                <option value="TA">TA</option>
                                <option value="FI">FI</option>
                                <option value="AD">AD</option>
                                <option value="NK">NK</option>
                                <option value="DY">DY</option>
                                <option value="SG">SG</option>
                                <option value="BY">BY</option>
                                <option value="FO">FO</option>
                                <option value="FZ">FZ</option>
                                <option value="SP">SP</option>
                                <option value="RF">RF</option>
                                <option value="MC">MC</option>
                                <option value="SK">SK</option>
                                <option value="HF">HF</option>
                                <option value="RG">RG</option>
                                <!-- Tambahkan pilihan kode aslab lainnya sesuai kebutuhan -->
                            </select>
                        </div>


                        <!-- Laboratorium -->
                        <div class="form-group">
                            <label>Dosen</label>
                            <select name="lab" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $matakuliah = mysqli_query($con, "SELECT * FROM tb_laboratorium ORDER BY id_lab ASC");
                                foreach ($matakuliah as $g) {
                                    echo "<option value='$g[id_lab]'>[ $g[kd_lab] ] $g[nama_lab]</option>";
                                }
                                ?>

                            </select>
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


<script>
    // Mendapatkan elemen HTML yang diperlukan
    const selectContainer = document.getElementById("select-container");

    // Daftar pilihan kode aslab yang dapat ditampilkan
    const kodeAslabOptions = [
        "ER",
        "DF",
        "RN",
        "RZ",
        "ZD",
        "TA",
        "FI",
        "AD",
        "NK",
        "DY",
        "SG",
        "BY",
        "FO",
        "FZ",
        "SP",
        "RF",
        "MC",
        "SK",
        "HF",
        "RG",
    ];

    // Event listener untuk menambahkan input select baru saat kode aslab pertama dipilih
    document.addEventListener("change", function (event) {
        // Cek apakah perubahan terjadi pada input select yang memiliki class "form-control"
        if (
            event.target.tagName === "SELECT" &&
            event.target.classList.contains("form-control")
        ) {
            tambahInputSelect();
        }
    });

    // Fungsi untuk menambahkan input select baru
    function tambahInputSelect() {
        const div = document.createElement("div");
        div.classList.add("select-group"); // Tambahkan class "select-group" ke div baru
        const select = document.createElement("select");
        select.classList.add("form-control"); // Tambahkan class "form-control" ke input select
        select.name = "kode_aslab[]";

        // Tambahkan opsi pertama dengan nilai kosong (kosong yang terpilih)
        const emptyOption = document.createElement("option");
        emptyOption.value = "";
        emptyOption.textContent = "Pilih kode aslab";
        emptyOption.selected = true; // Buat yang pertama terpilih
        emptyOption.disabled = true; // Jadikan yang pertama disabled
        select.appendChild(emptyOption);

        kodeAslabOptions.forEach((option) => {
            const optionElement = document.createElement("option");
            optionElement.value = option;
            optionElement.textContent = option;
            select.appendChild(optionElement);
        });

        div.appendChild(select);
        selectContainer.appendChild(div);
    }
</script>




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