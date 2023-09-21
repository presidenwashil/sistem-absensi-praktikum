<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Jenjang</h4>
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
                <a href="#">Master</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Daftar Jenjang</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="" class="btn btn-secondary btn-sm text-white" data-toggle="modal"
                            data-target="#addJenjang"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Jenjang</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $jenjang = mysqli_query($con, "SELECT * FROM tb_jenjang");
                            foreach ($jenjang as $l) { ?>
                                <tr>
                                    <td><b>
                                            <?= $no++; ?>.
                                        </b></td>
                                    <td>
                                        <?= $l['id_jenjang']; ?>
                                    </td>
                                    <td>
                                        <?= $l['nama_jenjang']; ?>
                                    </td>
                                    <td>

                                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#edit<?= $l['id_jenjang'] ?>"><i class="far fa-edit"></i> Edit</a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')"
                                            href="?page=master&act=deljenjang&id=<?= $k['id_jenjang'] ?>"><i
                                                class="fas fa-trash"></i> Del</a>

                                        <!-- Modal -->
                                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                            id="edit<?= $l['id_jenjang'] ?>" class="modal fade" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 id="exampleModalLabel" class="modal-title">Edit Lab</h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <div class="form-group">
                                                                        <label>Kode Jenjang</label>
                                                                        <input name="id_jenjang" type="hidden"
                                                                            value="<?= $l['id_jenjang'] ?>">
                                                                        <input name="id_jenjang" type="text"
                                                                            value="<?= $l['id_jenjang'] ?>"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jenjang</label>
                                                                        <input name="nama_jenjang" type="text"
                                                                            value="<?= $l['nama_jenjang'] ?>"
                                                                            class="form-control">
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
                                                            $save = mysqli_query($con, "UPDATE tb_jenjang SET id_jenjang ='$_POST[id_jenjang]',nama_jenjang='$_POST[nama_jenjang]' WHERE id_jenjang='$_POST[id_jenjang]' ");
                                                            if ($save) {
                                                                echo "<script>
                                                alert('Data diubah !');
                                                window.location='?page=master&act=jenjang';
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



                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Modal -->
            <div id="addJenjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                class="modal fade text-left">
                <div role="document" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Tambah Jenjang</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label>Kode Jenjang</label>
                                    <input name="id_jenjang" type="text" placeholder="Kode jenjang ..."
                                        class="form-control">
                                    <div class="form-group">
                                        <label>Jenjang</label>
                                        <input name="nama_jenjang" type="text" placeholder="Nama jenjang .."
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <button name="save" class="btn btn-primary" type="submit">Simpan</button>
                                        <button type="button" data-dismiss="modal"
                                            class="btn btn-secondary">Batal</button>
                                    </div>
                            </form>
                            <?php
                            if (isset($_POST['save'])) {

                                $save = mysqli_query($con, "INSERT INTO tb_jenjang VALUES(NULL,'$_POST[id_jenjang]','$_POST[nama_jenjang]') ");
                                if ($save) {
                                    echo "<script>
                        alert('Data tersimpan !');
                        window.location='?page=master&act=jenjang';
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

        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>