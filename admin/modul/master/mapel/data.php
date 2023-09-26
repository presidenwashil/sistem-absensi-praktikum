<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Matakuliah</h4>
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
                <a href="#">Data Umum</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Daftar Matakuliah</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="" class="btn btn-secondary btn-sm text-white" data-toggle="modal"
                            data-target="#myModal"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama Matakuliah</th>
                                    <th>Jumlah SKS</th>
                                    <th>Semester</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $matakuliah = mysqli_query($con, "SELECT * FROM tb_matakuliah
                                    INNER JOIN tb_semester ON tb_matakuliah.id_semester = tb_semester.id_semester
                                    INNER JOIN tb_thajaran ON tb_matakuliah.id_thajaran = tb_thajaran.id_thajaran");
                                foreach ($matakuliah as $k) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $k['kode_matakuliah']; ?></td>
                                        <td><?= $k['matakuliah']; ?></td>
                                        <td><?= $k['sks']; ?></td>
                                        <td><?= $k['semester']; ?></td>
                                        <td><?= $k['tahun_ajaran']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit<?= $k['id_matakuliah']; ?>"><i
                                                    class="far fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin Hapus Data ??')"
                                                href="?page=master&act=delmapel&id=<?= $k['id_mapel']; ?>"><i
                                                    class="fas fa-trash"></i> Del</a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit -->
                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                        id="edit<?= $k['id_matakuliah']; ?>" class="modal fade" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 id="exampleModalLabel" class="modal-title">Edit Matakuliah</h4>
                                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <label>Kode Matakuliah</label>
                                                                    <input name="id" type="hidden"
                                                                        value="<?= $k['id_matakuliah']; ?>">
                                                                    <input name="kode" type="text"
                                                                        value="<?= $k['kode_matakuliah']; ?>"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Matakuliah</label>
                                                                    <input name="matakuliah" type="text"
                                                                        value="<?= $k['matakuliah']; ?>"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah SKS</label>
                                                                    <select name="sks" class="form-control">
                                                                        <option value="">Pilih SKS</option>
                                                                        <option value="1"
                                                                            <?= ($k['sks'] == '1') ? 'selected' : ''; ?>>1
                                                                        </option>
                                                                        <option value="2"
                                                                            <?= ($k['sks'] == '2') ? 'selected' : ''; ?>>2
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Semester</label>
                                                                    <select name="id_semester" class="form-control">
                                                                        <option value="">Pilih Semester</option>
                                                                        <?php
                                                                        $smt = mysqli_query($con, "SELECT * FROM tb_semester ORDER BY id_semester ASC");
                                                                        foreach ($smt as $sm) {
                                                                            $selected = ($sm['id_semester'] == $k['id_semester']) ? 'selected' : '';
                                                                            echo "<option value='$sm[id_semester]' $selected>$sm[semester]</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tahun Ajaran</label>
                                                                    <select name="id_thajaran" class="form-control">
                                                                        <option value="">Pilih Tahun Ajaran</option>
                                                                        <?php
                                                                        $tha = mysqli_query($con, "SELECT * FROM tb_thajaran ORDER BY id_thajaran ASC");
                                                                        foreach ($tha as $th) {
                                                                            $selected = ($th['id_thajaran'] == $k['id_thajaran']) ? 'selected' : '';
                                                                            echo "<option value='$th[id_thajaran]' $selected>$th[tahun_ajaran]</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button name="edit" class="btn btn-primary"
                                                                        type="submit">Edit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php
                                                    if (isset($_POST['edit'])) {
                                                        $save = mysqli_query($con, "UPDATE tb_matakuliah SET kode_matakuliah='$_POST[kode]', matakuliah='$_POST[matakuliah]', sks='$_POST[sks]', id_semester='$_POST[id_semester]', id_thajaran='$_POST[id_thajaran]' WHERE id_matakuliah='$_POST[id]' ");
                                                        if ($save) {
                                                            echo "<script>
                                                                alert('Data diubah !');
                                                                window.location='?page=master&act=mapel';
                                                                </script>";
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">Tambah Matakuliah</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label>Kode Matakuliah</label>
                        <input name="kode" type="text" value="IFP<?= time() ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Matakuliah</label>
                        <input name="matakuliah" type="text" placeholder="Nama matakuliah .." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah SKS</label>
                        <select name="sks" class="form-control">
                            <option value="">Pilih Jumlah SKS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <select name="id_semester" class="form-control">
                            <option value="">Pilih Semester</option>
                            <?php
                            $smt = mysqli_query($con, "SELECT * FROM tb_semester ORDER BY id_semester ASC");
                            foreach ($smt as $sm) {
                                echo "<option value='$sm[id_semester]'>$sm[semester]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <select name="id_thajaran" class="form-control">
                            <option value="">Pilih Tahun Ajaran</option>
                            <?php
                            $tha = mysqli_query($con, "SELECT * FROM tb_thajaran ORDER BY id_thajaran ASC");
                            foreach ($tha as $th) {
                                echo "<option value='$th[id_thajaran]'>$th[tahun_ajaran]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="save" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['save'])) {
                    $save = mysqli_query($con, "INSERT INTO tb_matakuliah VALUES(NULL,'$_POST[kode]','$_POST[matakuliah]','$_POST[sks]','$_POST[id_semester]','$_POST[id_thajaran]') ");
                    if ($save) {
                        echo "<script>
                            alert('Data tersimpan !');
                            window.location='?page=master&act=mapel';
                            </script>";
                    }
                }
                ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
