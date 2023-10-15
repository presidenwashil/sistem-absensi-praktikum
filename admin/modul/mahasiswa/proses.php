<?php
if (isset($_POST['saveMahasiswa'])) {
    $pass = sha1($_POST['nim']);

    // Mengecek apakah file gambar diunggah
    if (!empty($_FILES['foto']['name'])) {
        $sumber = $_FILES['foto']['tmp_name'];
        $target = '../assets/img/user/';
        $nama_gambar = $_FILES['foto']['name'];
        $pindah = move_uploaded_file($sumber, $target . $nama_gambar);

        // Memastikan gambar berhasil dipindahkan
        if (!$pindah) {
            echo "Gagal mengunggah gambar.";
            exit(); // Hentikan eksekusi script jika gagal mengunggah gambar
        }
    } else {
        $nama_gambar = ''; // Atau bisa juga menggunakan NULL
    }

    // Periksa apakah NIM sudah ada sebelumnya
    $checkDuplicateNIM = mysqli_query($con, "SELECT * FROM tb_mahasiswa WHERE nim = '$_POST[nim]'");
    if (mysqli_num_rows($checkDuplicateNIM) > 0) {
        // NIM sudah ada
        echo "
        <script type='text/javascript'>
        setTimeout(function () { 
            swal('NIM Sudah Digunakan', 'Data mahasiswa dengan NIM tersebut sudah ada', {
                icon : 'error',
                buttons: {        			
                    confirm: {
                        className : 'btn btn-danger'
                    }
                },
            });    
        },10);  
        window.setTimeout(function(){ 
            window.location.replace('?page=mahasiswa');
        } ,3000);   
        </script>";
        exit(); // Hentikan eksekusi script jika NIM sudah ada
    }

    $saveMahasiswa = mysqli_query($con, "INSERT INTO tb_mahasiswa (nim, nama_mahasiswa, password, foto, status) VALUES ('$_POST[nim]', '$_POST[nama_mahasiswa]', '$pass', '$nama_gambar', '1') ");

    if ($saveMahasiswa) {
        echo "
        <script type='text/javascript'>
        setTimeout(function () { 
            swal('($_POST[nama_mahasiswa]) ', 'Berhasil disimpan', {
                icon : 'success',
                buttons: {        			
                    confirm: {
                        className : 'btn btn-success'
                    }
                },
            });    
        },10);  
        window.setTimeout(function(){ 
            window.location.replace('?page=mahasiswa');
        } ,3000);   
        </script>";
    } else {
        echo "Terjadi kesalahan dalam menyimpan data mahasiswa.";
    }
} elseif (isset($_POST['addKelasMahasiswa'])) {
    $idMahasiswa = $_POST['nama_mahasiswa'];
    $idKelas = $_POST['id_mkelas'];

    // Periksa apakah data sudah ada sebelumnya
    $checkDuplicate = mysqli_query($con, "SELECT * FROM tb_mahasiswa_kelas WHERE id_mahasiswa = '$idMahasiswa' AND id_mkelas = '$idKelas'");
    if (mysqli_num_rows($checkDuplicate) > 0) {
        // Data sudah ada

        echo "
            <script type='text/javascript'>
            setTimeout(function () { 
                swal('Data Sudah Tersimpan', 'kelas sudah diambil', {
                    icon : 'error',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });    
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('?page=mahasiswa');
            } ,3000);   
            </script>";
    } else {
        // Data belum ada, simpan data ke dalam tb_mahasiswa_kelas
        $saveKelasMahasiswa = "INSERT INTO tb_mahasiswa_kelas (id_mhskelas, id_mahasiswa, id_mkelas) VALUES (NULL, '$idMahasiswa', '$idKelas')";
        $result = mysqli_query($con, $saveKelasMahasiswa);

        if ($result) {
            // Mahasiswa berhasil didaftarkan ke kelas
            echo "
            <script type='text/javascript'>
            setTimeout(function () { 
                swal('Data Tersimpan', 'Mahasiswa berhasil didaftarkan ke kelas', {
                    icon : 'success',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });    
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('?page=mahasiswa');
            } ,3000);   
            </script>";
        } else {
            // Terjadi kesalahan
            echo "Terjadi kesalahan saat mendaftarkan mahasiswa ke kelas: " . mysqli_error($con);
        }
    }
} elseif (isset($_POST['editMahasiswa'])) {
    $gambar = @$_FILES['foto']['name'];
    if (!empty($gambar)) {
        move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/img/user/$gambar");
        $ganti = mysqli_query($con, "UPDATE tb_mahasiswa SET foto='$gambar' WHERE id_mahasiswa='$_POST[id]' ");
    }

    $editSiswa = mysqli_query($con, "UPDATE tb_mahasiswa SET nama_mahasiswa='$_POST[nama]' WHERE id_mahasiswa='$_POST[id]' ");

    if ($editSiswa) {
        echo "
            <script type='text/javascript'>
            setTimeout(function () { 
                swal('($_POST[nama]) ', 'Berhasil diubah', {
                    icon : 'success',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });    
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('?page=mahasiswa');
            } ,3000);   
            </script>";
    } else {
        echo "Terjadi kesalahan dalam mengubah data mahasiswa.";
    }
}
?>