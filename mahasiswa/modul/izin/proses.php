<?php

if (isset($_POST['saveIzin'])) {

	$sumber = @$_FILES['surat_izin']['tmp_name'];
	$target = '../assets/public/izin/';
	$nama_file = @$_FILES['surat_izin']['name'];
	$pindah = move_uploaded_file($sumber, $target . $nama_file);

	if ($pindah) {
		// Validasi tipe file
		$allowed_file_types = array('jpg', 'jpeg', 'png', 'pdf'); // Tipe file yang diizinkan
		$file_extension = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

		if (!in_array($file_extension, $allowed_file_types)) {
			echo "
            <script>
            setTimeout(function() {
                alert('Tipe file tidak valid. Hanya file JPG, JPEG, PNG, dan PDF yang diizinkan.');
                window.location.replace('?page=izin');
            }, 10);
            </script>";
		} else {
			// Validasi ukuran file (maksimal 800KB)
			$max_file_size = 800 * 1024; // 800KB dalam bytes

			if ($_FILES['surat_izin']['size'] > $max_file_size) {
				echo "
                <script>
                setTimeout(function() {
                    alert('Ukuran file terlalu besar. Maksimal ukuran file adalah 800KB.');
                    window.location.replace('?page=izin');
                }, 10);
                </script>";
			} else {
				// Semua validasi berhasil, lanjutkan penyimpanan data
				$save = mysqli_query($con, "INSERT INTO tb_izin VALUES(NULL,'$_POST[nama]','$_POST[nim]','$_POST[id_matakuliah]','$_POST[id_mkelas]','$_POST[kelompok]','$_POST[tanggal]','$_POST[alasan]','$nama_file')");
				if ($save) {
					echo "
                    <script>
                    setTimeout(function() {
                        alert('Berhasil dikirim');
                        window.location.replace('?page=izin');
                    }, 10);
                    </script>";
				} else {
					echo "
                    <script>
                    setTimeout(function() {
                        alert('Gagal');
                        window.location.replace('?page=izin');
                    }, 10);
                    </script>";
				}
			}
		}
	} else {
		// Jika move_uploaded_file gagal
		echo "
        <script>
        setTimeout(function() {
            alert('Gagal mengupload file.');
            window.location.replace('?page=izin');
        }, 10);
        </script>";
	}
}
?>