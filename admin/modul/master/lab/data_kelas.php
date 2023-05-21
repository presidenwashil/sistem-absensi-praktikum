<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Lab</h4>
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
								<a href="#">Daftar Lab</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										 <a href="" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#addLab"><i class="fa fa-plus"></i> Tambah</a>
									</div>
								</div>
								<div class="card-body">
									
									<table class="table table-sm">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Kode Lab</th>
												<th scope="col">Nama Lab</th>
												<th scope="col">Opsi</th>
											</tr>
										</thead>
										<tbody>
                        <?php 
                        $no=1;
                        $lab = mysqli_query($con,"SELECT * FROM tb_laboratorium");
                        foreach ($lab as $l) {?>
                        <tr>
                            <td><b><?=$no++;?>.</b></td>                            
                            <td><?=$l['kd_lab'];?></td>
                            <td><?=$l['nama_lab'];?></td>
                            <td>
                                
                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?=$l['id_lab'] ?>"><i class="far fa-edit"></i> Edit</a>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=master&act=dellab&id=<?=$k['id_lab'] ?>"><i class="fas fa-trash"></i> Del</a>

                            <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?=$l['id_lab'] ?>" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Edit Lab</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                          <div class="row">
                                            <div class="col-md-10">
                                                  <div class="form-group">
                                                <label>Nama Lab</label>
                                                 <input name="id" type="hidden" value="<?=$l['id_lab'] ?>">
                                                <input name="lab" type="text" value="<?=$l['nama_lab'] ?>" class="form-control">
                                            </div>
                                           
                                            <div class="form-group">                    
                                                    <button name="edit" class="btn btn-primary" type="submit">Edit</button>
                                             
                                            </div>                        
                                            </div>                      
                                          </div>
                                        </form>
                                        <?php 
                                        if (isset($_POST['edit'])) {
                                            $save= mysqli_query($con,"UPDATE tb_laboratorium SET nama_lab='$_POST[lab]' WHERE id_lab='$_POST[id]' ");
                                            if ($save) {
                                                echo "<script>
                                                alert('Data diubah !');
                                                window.location='?page=master&act=lab';
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
<div id="addLab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Lab</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label>Kode Lab</label>
                        <input name="kode" type="text" value="KL-<?=time();?>" class="form-control" readonly>
                    <div class="form-group">
                        <label>Nama Lab</label>
                        <input name="lab" type="text" placeholder="Nama lab .." class="form-control">
                    </div>
                   
                    <div class="form-group">                     
                            <button name="save" class="btn btn-primary" type="submit">Simpan</button>
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                    </div>
                </form>
                <?php 
                if (isset($_POST['save'])) {
                   
                    $save= mysqli_query($con,"INSERT INTO tb_laboratorium VALUES(NULL,'$_POST[kode]','$_POST[lab]') ");
                    if ($save) {
                        echo "<script>
                        alert('Data tersimpan !');
                        window.location='?page=master&act=lab';
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
