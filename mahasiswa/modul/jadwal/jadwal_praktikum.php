<div class="page-inner">

    <div class="page-header">
        <h4 class="page-title">Jadwal Praktikum</h4>
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
        </ul>
    </div>


    <div class="row mt-4">

        <?php
        foreach ($kehadiran as $jd) {
            ?>
            <div class="col-md-5 col-xs-12">

                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        <h3>
                            <?= $jd['matakuliah']; ?>
                        </h3>
                    </strong>
                    <hr>
                    <ul>
                        <li>
                            Hari :
                            <?= $jd['hari']; ?>
                        </li>
                        <li>
                            Jam Ke :
                            <?= $jd['jamke']; ?>
                        </li>
                        <li>
                            Waktu :
                            <?= $jd['jam_mengajar']; ?>
                        </li>
                        <li>
                            Lab :
                            <?= $jd['nama_lab']; ?>
                        </li>
                        <li>
                            Kelas :
                            <?= $jd['nama_kelas']; ?>
                        </li>
                        <li>
                            Semester :
                            <?= $jd['semester']; ?>
                        </li>
                        <li>
                            Tahun Ajaran :
                            <?= $jd['tahun_ajaran']; ?>
                        </li>
                    </ul>
                    <hr>
                    <a href="?page=kehadiran&pelajaran=<?= $jd['id_mengajar'] ?>"
                        class="btn btn-default btn-block text-left">
                        <i class="fas fa-clipboard-check"></i>
                        Lihat Kehadiran
                    </a>
                </div>
            </div>
        <?php } ?>

    </div>
    <a href="javascript:history.back()" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
</div>