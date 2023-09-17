<?php
$del = mysqli_query($con, "DELETE FROM tb_matakuliah WHERE id_matakuliah=$_GET[id]");
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=master&act=mapel';
		</script>";
}

?>