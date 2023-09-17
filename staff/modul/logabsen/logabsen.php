<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Log Absen</h4>
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
                    <a href="#">Data Log Absen</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Daftar Log Absen</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Absen</th>
                                        <th>Pertemuan Ke</th>
                                        <th>Kode Aslab</th>
                                        <th>Jam Mengajar</th>
                                        <th>Dosen Pembimbing</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Query MySQL
                                    //PRnya itu jumlah jaga pembagian masalah honor tapi disini tidak akan di bahas
                                    $no=1;
                                    $query = "SELECT la.tgl_absen, MAX(la.pertemuan_ke) AS pertemuan_ke, MAX(la.kode_aslab) AS kode_aslab, m.jam_mengajar, g.nama_dosen, mk.nama_kelas, l.nama_lab
                                    FROM _logabsensi la
                                    LEFT JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                                    LEFT JOIN tb_mkelas mk ON m.id_mkelas = mk.id_mkelas
                                    LEFT JOIN tb_dospem w ON mk.id_mkelas = w.id_mkelas
                                    LEFT JOIN tb_dosen g ON w.id_dosen = g.id_dosen
                                    LEFT JOIN tb_laboratorium l ON m.id_lab = l.id_lab
                                    GROUP BY la.tgl_absen, g.nama_dosen";
                                    $result = mysqli_query($con, $query);
                                    if (!$result) {
                                      die("Query gagal: " . mysqli_error($con));
                                    }
          
                                    // Menampilkan hasil query
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                              
                                      <tr>
                                        <td><?=$no++;?>.</td>
                                        <td><?php echo $row['tgl_absen']; ?></td>
                                        <td><?php echo $row['pertemuan_ke']; ?></td>
                                        <td><?php echo $row['kode_aslab']; ?></td>
                                        <td><?php echo $row['jam_mengajar']; ?></td>
                                        <td><?php echo $row['nama_dosen']; ?></td>
                                        <td><?php echo $row['nama_kelas']; ?></td>
                                        <td><?php echo $row['nama_lab']; ?></td>
                                      </tr>
                                      <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  