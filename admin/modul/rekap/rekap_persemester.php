<?php
$time = time();
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
// header("Content-type: application/vnd-ms-excel");
// header("Content-Disposition: attachment; filename=DAFTAR-HADIR-$time.xls");
?>
<?php

include '../../../config/db.php';

?>
<style>
    td.rotate {
        transform:
            /*nomor magic*/
            translate(1px, 1px) rotate(270deg);
        /*width: 3px;*/
        padding: 0px;
        word-spacing: none;
        white-space: nowrap;
        /*	padding:0px;
        white-space: nowrap;
        position: absolute;
        height: 40px;
        -webkit-transform: rotate(270deg);
        -moz-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        -o-transform: rotate(270deg);
        transform: rotate(270deg);*/

        /*transform: 
        translate(0px,0px)
        rotate(270deg);
        padding: 0px;
        word-spacing:none;
        white-space: nowrap;*/
    }
</style>
<?php
// tampilkan data mengajar
$kelasMengajar = mysqli_query($con, "SELECT * FROM tb_mengajar 
	INNER JOIN tb_aslab ON tb_mengajar.id_aslab=tb_aslab.id_aslab

INNER JOIN tb_matakuliah ON tb_mengajar.id_matakuliah=tb_matakuliah.id_matakuliah
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
INNER JOIN tb_kelompok ON tb_mengajar.id_kelompok=tb_kelompok.id_kelompok
INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
INNER JOIN tb_program_studi ON tb_mengajar.id_program_studi=tb_program_studi.id_program_studi
INNER JOIN tb_jenjang ON tb_mengajar.id_jenjang=tb_jenjang.id_jenjang
WHERE tb_mengajar.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1  ");

foreach ($kelasMengajar as $d)




    // tampilkan data absen

    $qry = mysqli_query($con, "SELECT * FROM _logabsensi 
INNER JOIN tb_mahasiswa ON _logabsensi.id_mahasiswa=tb_mahasiswa.id_mahasiswa
INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
INNER JOIN tb_aslab ON tb_mengajar.id_aslab=tb_aslab.id_aslab
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
INNER JOIN tb_kelompok ON tb_mengajar.id_kelompok=tb_kelompok.id_kelompok
INNER JOIN tb_laboratorium ON tb_mengajar.id_lab=tb_laboratorium.id_lab
INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
INNER JOIN tb_program_studi ON tb_mengajar.id_program_studi=tb_program_studi.id_program_studi
INNER JOIN tb_jenjang ON tb_mengajar.id_jenjang=tb_jenjang.id_jenjang
WHERE tb_mengajar.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1
	 GROUP BY _logabsensi.id_mahasiswa  ORDER BY _logabsensi.id_mahasiswa ASC  ");


// tampilkan data dospem
$dospem = mysqli_query($con, "SELECT * FROM tb_dospem INNER JOIN tb_dosen ON tb_dospem.id_dosen=tb_dosen.id_dosen WHERE tb_dospem.id_mkelas='$_GET[kelas]' "); foreach ($dospem as $walas)


    // $tglTerakhir = date('t',strtotime($tglBulan));
    $tglTerakhir = $d['sks'] == 1 ? 10 : 18;

?>

<style>
    body {
        font-family: arial;
    }
</style>
<table width="100%">
    <div style="text-align: center;">
        <img src="../../../assets/img/stmik.png" width="200" height="200" margin="0"
            style=" display: inline-block; vertical-align: middle;">
        <div style="display: inline-block; vertical-align: middle;">
            <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 35; margin: 0;">SEKOLAH TINGGI MANAJEMEN
                INFORMATIKA
                dan KOMPUTER</h2>
            <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 60; margin: 0;">
                WIDYA CIPTA DHARMA
            </h1>
            <p style="font-size: 26; margin: 1px;">Status Terakreditasi Badan Akredirasi Nasional Perguruan Tinggi</p>
            <p style="font-size: 26; margin: 1px;"> Jl. M. Yamin No. 25 Samarinda - Kalimantan Timur 75123 Telp. 0541
                -
                736071 Fax. 203492,734468<br>
                E-mail : wicida@wicida.ac.id
            </p>
        </div>
    </div>
    <hr style="border-top: 2px solid #333; margin-top: 10px; margin-bottom: 1px;">
    <hr style="border-top: 2px solid #333; margin-top: 1px; margin-bottom: 10px;">
    <div style="text-align: center; font-size: 12px;">

    </div>
    <tr>
        <td>

            <table width="100%">
                <tr>
                    <td colspan="2"><b style="border: 2px solid;padding: 7px;">
                            <?= strtoupper($d['nama_kelas']) ?>
                        </b> </td>
                    <td>
                        <b style="border: 2px solid;padding: 7px;">
                            <?= $d['semester'] ?> |
                            <?= $d['tahun_ajaran'] ?>
                        </b>
                    </td>
                    <td rowspan="5">
                        <ul>
                            <li>H= Hadir</li>
                            <li>S = Sakit</li>
                            <li>I = Izin</li>
                            <!-- <li>T = Terlambat</li> -->
                            <li>A = Absen</li>
                            <li>O = Online</li>
                        </ul>
                        <!-- <p>H= Hadir</p>
    <p>I = Izin</p>
    <p>S = Sakit</p>
    <p>A = Absesn    </p> -->
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td>Praktikum </td>
                    <td>:</td>
                    <td>
                        <?= $d['matakuliah'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Dosen </td>
                    <td>:</td>
                    <td>
                        <?= $walas['nama_dosen'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenjang </td>
                    <td>:</td>
                    <td>
                        <?= $d['nama_jenjang'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Program Studi </td>
                    <td>:</td>
                    <td>
                        <?= $d['nama_program_studi'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <?= $d['nama_kelompok'] ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<hr style="height: 3px;border: 1px solid;">


<table width="100%" border="1" cellpadding="2" style="border-collapse: collapse;">
    <tr>
        <td rowspan="2" bgcolor="#EFEBE9" align="center">NO</td>
        <td rowspan="2" bgcolor="#EFEBE9" align="center">NIM</td>
        <td rowspan="2" bgcolor="#EFEBE9">NAMA MAHASISWA</td>
        <td colspan="<?= $tglTerakhir; ?>" style="padding: 8px;" bgcolor="#EFEBE9" align="center"><b>Praktikum</b></td>
        <td colspan="6" align="center" bgcolor="#EFEBE9">JUMLAH</td>
    </tr>

    <tr>

        <?php
        for ($i = 1; $i <= $tglTerakhir; $i++) {
            echo "<td bgcolor='#EFEBE9' align='center'>" . $i . "</td>";
        }
        ?>


        <td rowspan="2" bgcolor="#2196F3" align="center">H</td>
        <td rowspan="2" bgcolor="#FFC107" align="center">S</td>
        <td rowspan="2" bgcolor="#4CAF50" align="center">I</td>
        <!-- <td rowspan="2" bgcolor="#D50000" align="center">T</td> -->
        <td rowspan="2" bgcolor="#76FF03" align="center">A</td>
        <td rowspan="2" bgcolor="#9C27B0" align="center">O</td>

    </tr>

    <tr>
        <?php
        for ($i = 1; $i <= $tglTerakhir; $i++) { ?>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">
                <?php
                $ket = mysqli_query($con, "SELECT * FROM _logabsensi
	INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
	INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
	INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
	WHERE _logabsensi.pertemuan_ke='$i' AND _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' AND _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 GROUP BY pertemuan_ke ");
                foreach ($ket as $h)
                    $tgl = date('d m Y', strtotime($h['tgl_absen']));
                // echo "".namahari($tgl).",";
                echo $tgl;

                ?>

            </td>

        <?php } ?>
    </tr>

    <?php
    // tampilkan absen mahasiswa
    $no = 1; foreach ($qry as $ds) {
        $warna = ($no % 2 == 1) ? "#ffffff" : "#f0f0f0";

        ?>
        <tr>

        <tr bgcolor="<?= $warna; ?>">
            <td align="center">
                <?= $no++; ?>
            </td>
            <td>
                <?= $ds['nim']; ?>
            </td>
            <td>
                <?= $ds['nama_mahasiswa']; ?>
            </td>
            <?php
            for ($i = 1; $i <= $tglTerakhir; $i++) {
                ?>
                <td align="center" bgcolor="white">
                    <?php
                    $ket = mysqli_query($con, "SELECT * FROM _logabsensi
			INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
			INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
			INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
			WHERE _logabsensi.pertemuan_ke='$i' AND _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' AND _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 GROUP BY pertemuan_ke ");
                    foreach ($ket as $h)

                        // echo $h['ket'];
                        if ($h['ket'] == 'H') {
                            echo "<b style='color:#2196F3;'>H</b>";
                        } elseif ($h['ket'] == 'I') {
                            echo "<b style='color:#4CAF50;'>I</b>";
                        } elseif ($h['ket'] == 'S') {
                            echo "<b style='color:#FFC107;'>S</b>";
                        } elseif ($h['ket'] == 'A') {
                            echo "<b style='color:#D50000;'>A</b>";
                        } elseif ($h['ket'] == 'T') {
                            echo "<b style='color:#76FF03;'>T</b>";
                        } else {
                            echo "<b style='color:#9C27B0;'>O</b>";
                        }



                    ?>
                </td>

                <?php


            }

            ?>

            <td align="center" style="font-weight: bold;">
                <?php
                $hadir = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS hadir FROM _logabsensi
                INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='H' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $hadir['hadir'];
                ?>
            </td>
            <td align="center" style="font-weight: bold;">
                <?php
                $sakit = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS sakit FROM _logabsensi
	                INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                    INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                    INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                    WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='S' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $sakit['sakit'];
                ?>
            </td>
            <td align="center" style="font-weight: bold;">
                <?php
                $izin = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS izin FROM _logabsensi
                    INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                    INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                    INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                    WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='I' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $izin['izin'];
                ?>
            </td align="center" style="font-weight: bold;">

            <!-- <td align="center" style="font-weight: bold;">
                <?php
                $tlambat = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS terlambat FROM _logabsensi
                    INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                    INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                    INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                    WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='T' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $tlambat['terlambat'];

                ?>
            </td> -->

            <td align="center" style="font-weight: bold;">
                <?php
                $alfa = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS alfa FROM _logabsensi
                    INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                    INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                    INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                    WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='A' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $alfa['alfa'];
                ?>
            </td>

            <td align="center" style="font-weight: bold;">
                <?php
                $online = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ket) AS online FROM _logabsensi
                INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
                WHERE _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' and _logabsensi.ket='O' and _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]'  AND tb_thajaran.status=1 AND tb_semester.status=1 "));
                echo $online['online'];
                ?>
            </td>
        </tr>

    <?php } ?>

    <tr></tr>

    <tr>
        <!-- style="height: 150px;" -->
        <td colspan="3" align="center">Tanggal Pertemuan</td>
        <?php
        for ($i = 1; $i <= $tglTerakhir; $i++) {
            $currentDate = date('Y-m-d');
            ?>
            <td align="center">
                <em style="font: 11px;">
                    <?php
                    $query = "SELECT la.tgl_absen 
                      FROM _logabsensi la
                      INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                      INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                      INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                      WHERE la.pertemuan_ke='$i' AND la.id_mahasiswa='$ds[id_mahasiswa]' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
                    $result = mysqli_query($con, $query);
                    if (!$result) {
                        die("Query gagal: " . mysqli_error($con));
                    }

                    if ($row = mysqli_fetch_assoc($result)) {
                        $tgl = date('d m Y', strtotime($row['tgl_absen']));
                        echo $tgl;
                    }
                    ?>
                </em>
            </td>
            <?php
        }
        ?>
    </tr>


    <tr>
        <!-- style="height: 150px;" -->
        <td colspan="3" align="center">Asisten</td>
        <?php
        for ($i = 1; $i <= $tglTerakhir; $i++) {
            $kodeaslab = ""; // Inisialisasi kode aslab dengan tanda hubung (-)
        
            $ket = mysqli_query($con, "SELECT * FROM _logabsensi
            INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
            INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
            INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
            WHERE _logabsensi.pertemuan_ke='$i' AND _logabsensi.id_mahasiswa='$ds[id_mahasiswa]' AND _logabsensi.id_mengajar='$_GET[pelajaran]' AND tb_mengajar.id_mkelas='$_GET[kelas]' AND tb_thajaran.status=1 AND tb_semester.status=1 GROUP BY pertemuan_ke ");

            foreach ($ket as $h) {
                $kodeaslab = $h['kode_aslab'];
                break; // Hanya perlu ambil kode aslab pertama jika ada
            }

            ?>
            <td align="center">
                <em style="font: 11px;">
                    <?php echo $kodeaslab; ?>
                </em>
            </td>
            <?php
        }
        ?>
    </tr>

    <!-- <tr>
        <td colspan="3" align="center">Jumlah Hadir</td>
        <?php
        $jumlahPertemuan = $tglTerakhir; // Jumlah pertemuan total
        
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah mahasiswa yang hadir dalam satu pertemuan
            $query = "SELECT COUNT(*) AS hadir 
                  FROM _logabsensi la
                  INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                  INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                  INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                  WHERE la.pertemuan_ke='$i' AND la.ket='H' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $result = mysqli_query($con, $query);
            if (!$result) {
                die("Query gagal: " . mysqli_error($con));
            }

            $row = mysqli_fetch_assoc($result);
            $hadir = $row['hadir'];

            // Cetak jumlah mahasiswa yang hadir dalam satu pertemuan
            if ($hadir > 0) {
                echo "<td align='center'>$hadir</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr>

    <tr>
        <td colspan="3" align="center">Sakit</td>
        <?php
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah mahasiswa yang sakit dalam satu pertemuan
            $querySakit = "SELECT COUNT(*) AS sakit 
                       FROM _logabsensi la
                       INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                       INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                       INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                       WHERE la.pertemuan_ke='$i' AND la.ket='S' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $resultSakit = mysqli_query($con, $querySakit);
            if (!$resultSakit) {
                die("Query gagal: " . mysqli_error($con));
            }
            $rowSakit = mysqli_fetch_assoc($resultSakit);
            $sakit = $rowSakit['sakit'];

            // Cetak jumlah mahasiswa yang sakit dalam satu pertemuan
            if ($sakit > 0) {
                echo "<td align='center'>$sakit</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr>

    <tr>
        <td colspan="3" align="center">Izin</td>
        <?php
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah mahasiswa yang izin dalam satu pertemuan
            $queryIzin = "SELECT COUNT(*) AS izin 
                      FROM _logabsensi la
                      INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                      INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                      INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                      WHERE la.pertemuan_ke='$i' AND la.ket='I' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $resultIzin = mysqli_query($con, $queryIzin);
            if (!$resultIzin) {
                die("Query gagal: " . mysqli_error($con));
            }
            $rowIzin = mysqli_fetch_assoc($resultIzin);
            $izin = $rowIzin['izin'];

            // Cetak jumlah mahasiswa yang izin dalam satu pertemuan
            if ($izin > 0) {
                echo "<td align='center'>$izin</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr>

    <tr>
        <td colspan="3" align="center">Terlambat</td>
        <?php
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah siswa yang terlambat dalam satu pertemuan
            $queryTelat = "SELECT COUNT(*) AS telat 
                       FROM _logabsensi la
                       INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                       INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                       INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                       WHERE la.pertemuan_ke='$i' AND la.ket='T' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $resultTelat = mysqli_query($con, $queryTelat);
            if (!$resultTelat) {
                die("Query gagal: " . mysqli_error($con));
            }
            $rowTelat = mysqli_fetch_assoc($resultTelat);
            $telat = $rowTelat['telat'];

            // Cetak jumlah mahasiswa yang terlambat dalam satu pertemuan
            if ($telat > 0) {
                echo "<td align='center'>$telat</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr>

    <tr>
        <td colspan="3" align="center">Alfa</td>
        <?php
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah mahasiswa yang alfa dalam satu pertemuan
            $queryAlfa = "SELECT COUNT(*) AS alfa 
                      FROM _logabsensi la
                      INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                      INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                      INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                      WHERE la.pertemuan_ke='$i' AND la.ket='A' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $resultAlfa = mysqli_query($con, $queryAlfa);
            if (!$resultAlfa) {
                die("Query gagal: " . mysqli_error($con));
            }
            $rowAlfa = mysqli_fetch_assoc($resultAlfa);
            $alfa = $rowAlfa['alfa'];

            // Cetak jumlah mahasiswa yang alfa dalam satu pertemuan
            if ($alfa > 0) {
                echo "<td align='center'>$alfa</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr>

    <tr>
        <td colspan="3" align="center">Online</td>
        <?php
        for ($i = 1; $i <= $jumlahPertemuan; $i++) {
            // Menghitung jumlah mahasiswa yang online dalam satu pertemuan
            $queryOnline = "SELECT COUNT(*) AS online 
                        FROM _logabsensi la
                        INNER JOIN tb_mengajar m ON la.id_mengajar = m.id_mengajar
                        INNER JOIN tb_semester s ON m.id_semester = s.id_semester
                        INNER JOIN tb_thajaran t ON m.id_thajaran = t.id_thajaran
                        WHERE la.pertemuan_ke='$i' AND la.ket='O' AND la.id_mengajar='$_GET[pelajaran]' AND m.id_mkelas='$_GET[kelas]' AND t.status=1 AND s.status=1";
            $resultOnline = mysqli_query($con, $queryOnline);
            if (!$resultOnline) {
                die("Query gagal: " . mysqli_error($con));
            }
            $rowOnline = mysqli_fetch_assoc($resultOnline);
            $online = $rowOnline['online'];

            // Cetak jumlah mahasiswa yang online dalam satu pertemuan
            if ($online > 0) {
                echo "<td align='center'>$online</td>";
            } else {
                echo "<td align='center'>0</td>";
            }
        }
        ?>
    </tr> -->






</table>



<p></p>
<table width="100%">
    <td align="center">
        <p>
            Mengetahui,
        </p>
    </td>
</table>


<p></p>
<p></p>
<table width="100%">
    <tr>
        <td align="right">
            <p>
                <!-- Samarinda,
                <?php echo date('d-F-Y'); ?> -->
            </p>
        </td>
        <td align="right">
            <p>
                Samarinda,
                <?php echo date('d-F-Y'); ?>
            </p>
        </td>
    </tr>
    <tr>
        <td align="left">
            <p></p>
            <p></p>
            <p>
                Ka.Laboratorium Komputer
                <br>
                <img src="../../../assets/img/ttdketua.png" width="200px">
                <br>



                Ivan Haristyawan, S.T., M.M<br>
            </p>
        </td>

        <td align="right">
            <p>
                <!-- Samarinda,
                <?php echo date('d-F-Y'); ?> -->
            </p>

            <p>
                Staf.Laboratorium Komputer
                <br>
                <img src="../../../assets/img/ttd staf.lab.png" width="200px">
                <br>



                Ahmad Fajri, S.Kom., M.Kom <br>
            </p>
        </td>
    </tr>
</table>

<script>
    // window.print();
</script>