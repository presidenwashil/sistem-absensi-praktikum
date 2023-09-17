<?php
$del = mysqli_query($con, "DELETE FROM tb_dospem WHERE id_dospem=$_GET[id]");
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=master&act=dospem';
		</script>";
}

?>