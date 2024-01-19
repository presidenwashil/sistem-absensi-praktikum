<?php
//tampilkan data materi praktikum sesuai dengan id praktikum
$id_pelajaran = $_GET['pelajaran'];
$materi = mysqli_query($con, "SELECT materi FROM _logabsensi


INNER JOIN 
INNER JOIN tb_matakuliah 

 FROM 
_logabsensi WHERE id_mkelas='$id_pelajaran' ")


    ?>