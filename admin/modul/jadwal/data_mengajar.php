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
        <a href="#">Jadwal Praktikum</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Jadwal Praktikum</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="?page=jadwal&act=add" class="btn btn-secondary btn-sm text-white"><i class="fa fa-plus"></i>
              Tambah</a>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Jadwal</th>
                  <th>Matakuliah</th>
                  <th>Lab</th>
                  <th>Kelompok</th>
                  <th>TP/Semester</th>
                  <th>Program Studi</th>
                  <th>Jenjang</th>
                  <th>Kelas</th>
                  <th>Hari</th>
                  <th>Waktu</th>
                  <th>Sesi</th>
                  <th>Opsi </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $matakuliah = mysqli_query($con, "SELECT * FROM tb_mengajar 
                            INNER JOIN tb_aslab ON tb_mengajar.id_aslab=tb_aslab.id_aslab
                            INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
                            INNER JOIN tb_laboratorium ON tb_mengajar.id_lab=tb_laboratorium.id_lab
                            INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
                            INNER JOIN tb_kelompok ON tb_mengajar.id_kelompok=tb_kelompok.id_kelompok
                            INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                            INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran 
                            INNER JOIN tb_program_studi ON tb_mengajar.id_program_studi=tb_program_studi.id_program_studi
                            INNER JOIN tb_jenjang ON tb_mengajar.id_jenjang=tb_jenjang.id_jenjang
                               ");
                foreach ($matakuliah as $d) {
                  ?>

                  <tr>
                    <th scope="row"><b>
                        <?= $no++; ?>.
                      </b></th>
                    <td>
                      <?= $d['kode_pelajaran'] ?>
                    </td>
                    <td>
                      <?= $d['matakuliah'] ?>
                    </td>
                    <td>
                      <?= $d['nama_lab'] ?>
                    </td>
                    <td>
                      <?= $d['nama_kelas'] ?>
                    </td>
                    <td>
                      <?= $d['tahun_ajaran'] ?>/
                      <?= $d['semester'] ?>
                    </td>
                    <td>
                      <?= $d['nama_program_studi'] ?>
                    </td>
                    <td>
                      <?= $d['nama_jenjang'] ?>
                    </td>
                    <td>
                      <?= $d['nama_kelompok'] ?>
                    </td>
                    <td>
                      <?= $d['hari'] ?>
                    </td>
                    <td>
                      <?= $d['jam_mengajar'] ?>
                    </td>
                    <td>
                      <?= $d['jamke'] ?>
                    </td>
                    <td>
                      <!-- <a href="?page=jadwal&act=detail&id=<?= $d['id_mengajar']; ?>" class="btn btn-info btn-sm"><i
                          class="fa fa-info-circle"></i> Detail</a> -->
                      <a href="?page=jadwal&act=edit&id=<?= $d['id_mengajar']; ?>" class="btn btn-warning btn-sm"><i
                          class="fa fa-pencil"></i> Edit</a>
                      <a href="?page=jadwal&act=cancel&id=<?= $d['id_mengajar']; ?>" class="btn btn-danger btn-sm"><i
                          class="fa fa-times"></i> Batal</a>

                      <!-- <a  href="?page=nilai&mapel=<?= $d['id_pelajaran']; ?>" class="btn btn-success btn-sm"><i class="fas fa-file-contract"></i> Lihat Absen</a> -->
                    </td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>