<div class="card">
    <div class="card-header">
        <div class="card-title">Form Izin Praktikum</div>
    </div>
    <div class="card-body">
        <form action="?page=mahasiswa&act=proses" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $data['nama_mahasiswa']; ?>"
                            readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?= $data['nim']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="id_mkelas" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php
                            $kelas = mysqli_query($con, "SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
                            foreach ($kelas as $g) {
                                echo "<option value='$g[id_mkelas]'>$g[nama_kelas]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mata Praktikum</label>
                        <select name="id_matakuliah" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php
                            $matakuliah = mysqli_query($con, "SELECT * FROM tb_matakuliah ORDER BY id_matakuliah ASC");
                            foreach ($matakuliah as $g) {
                                echo "<option value='$g[id_matakuliah]'>[ $g[kode_matakuliah] ] $g[matakuliah]</option>";
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kelompok">Kelompok</label>
                        <select class="form-control" id="kelompok" name="kelompok">
                            <option value="">- Pilih -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <label>Alasan</label><br />
                        <label class="form-radio-label">
                            <input class="form-radio-input" type="radio" name="alasan" value="Sakit">
                            <span class="form-radio-sign">Sakit</span>
                        </label>
                        <label class="form-radio-label">
                            <input class="form-radio-input" type="radio" name="alasan" value="Izin">
                            <span class="form-radio-sign">Izin</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="surat_izin">Bukti Surat Izin (Resmi/Non-Resmi):</label>
                        <br><small>Bukti izin berupa:
                            <br>surat izin/sakit/tugas/dll. Surat diketik/tulis tangan
                            <br>dan <b>HARUS DITANDA TANGANI</b>
                            <br>oleh mahasiswa atau wali mahasiswa.
                            <br>
                            <br>Foto/Scan yang dikirim <b>CUKUP 1 (satu)</b>
                        </small>
                        <br>
                        <a href="modul/izin/SURAT%20PERMOHONAN%20IZIN%20PRAKTIKUM.docx" download>Unduh Fromat Surat</a>
                        <input type="file" id="surat_izin" name="surat_izin" class="form-control-file"
                            accept=".pdf, .jpg, .jpeg" required>
                        <small class="form-text text-muted">File harus berupa PDF, JPG, atau JPEG dan maksimal
                            800KB.</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button name="saveIzin" type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                        Kirim</button>
                </div>
            </div>
        </form>
    </div>