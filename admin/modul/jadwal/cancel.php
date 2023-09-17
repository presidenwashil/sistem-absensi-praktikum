<?php
$delLogAbsensi = mysqli_query($con, "DELETE FROM _logabsensi WHERE id_mengajar='$_GET[id]'");
$delMengajar = mysqli_query($con, "DELETE FROM tb_mengajar WHERE id_mengajar='$_GET[id]'");

if ($delMengajar) {
	echo "<script>
        alert('Data berhasil dihapus.');
        window.location='?page=jadwal';
    </script>";
} else {
	echo "Terjadi kesalahan dalam menghapus data.";
}
?>