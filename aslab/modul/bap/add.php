<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Aslab</h4>
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
                <a href="#">Data Aslab</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Aslab</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Form Entry Aslab</h3>
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
                            <label>Jumlah Peserta Yang Hadir</label>
                            <input name="jml_hadir" type="text" class="form-control" placeholder="20">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Peserta Yang Tidak Hadir</label>
                            <input name="jml_absen" type="text" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Peserta Yang Tidak Hadir</label>
                            <input name="tanggal" type="text" class="form-control" placeholder="5">
                        </div>

                        <div class="form-group">
                            <label>Nama Aslab</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <p>
                                <img src="../assets/img/user/<?= $data['foto']; ?>"
                                    class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
                            </p>
                            <label>Foto</label>
                            <input type="file" name="foto">
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