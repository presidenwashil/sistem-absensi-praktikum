<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Pilih Kelas Mahasiswa</h4>
        <!-- <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Data Mahasiswa</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Mahasiswa</a>
            </li>
        </ul> -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Form Entry Pilih Kelas Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <form action="?page=mahasiswa&act=proses" method="post" enctype="multipart/form-data">

                        <table cellpadding="3" style="font-weight: bold;">
                            <tr>
                                <td>Mahasiswa</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="nama_mahasiswa">
                                        <option value="">Pilih Mahasiswa</option>
                                        <?php
                                        $sqlMahasiswa = mysqli_query($con, "SELECT * FROM tb_mahasiswa ORDER BY nama_mahasiswa ASC");
                                        while ($mahasiswa = mysqli_fetch_array($sqlMahasiswa)) {
                                            echo "<option value='$mahasiswa[id_mahasiswa]'>$mahasiswa[nama_mahasiswa] ($mahasiswa[nim])</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas Mahasiswa</td>
                                <td>:</td>
                                <td>
                                    <div id="kelas-container">
                                        <select class="form-control" name="id_mkelas">
                                            <option>Pilih Kelas</option>
                                            <?php
                                            $sqlKelas = mysqli_query($con, "SELECT * FROM tb_mkelas ORDER BY id_mkelas ASC");
                                            while ($kelas = mysqli_fetch_array($sqlKelas)) {
                                                echo "<option value='$kelas[id_mkelas]'>$kelas[nama_kelas]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button name="addKelasMahasiswa" type="submit" class="btn btn-primary"><i
                                            class="fa fa-save"></i>
                                        Simpan</button>
                                    <a href="javascript:history.back()" class="btn btn-warning"><i
                                            class="fa fa-chevron-left"></i>
                                        Batal</a>
                                </td>
                            </tr>


                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>