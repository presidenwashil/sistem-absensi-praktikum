<?php
$del = mysqli_query($con, "DELETE FROM tb_jenjang WHERE id_jenjang=$_GET[id]");
if ($del) {
    echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=master&act=jenjang';
		</script>";
}

?>