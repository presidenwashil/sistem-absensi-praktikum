<?php
// Pastikan variabel global $con sudah didefinisikan sebelumnya

// Periksa apakah ada query parameter id_mahasiswa_kelas dan id_mkelas yang diterima
if (isset($_GET['id_mhskelas']) && isset($_GET['id_mkelas'])) {
    // Ambil ID mahasiswa_kelas dan ID kelas dari query parameter
    $id_mhskelas = $_GET['id_mhskelas'];
    $id_mkelas = $_GET['id_mkelas'];

    // Buat prepared statement untuk menghapus data mahasiswa_kelas
    $query = "DELETE FROM tb_mahasiswa_kelas WHERE id_mhskelas = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind parameter ID mahasiswa_kelas ke prepared statement
    mysqli_stmt_bind_param($stmt, "i", $id_mhskelas);

    // Eksekusi prepared statement
    if (mysqli_stmt_execute($stmt)) {
        echo " <script>
                alert('Data telah dihapus !');
                window.location='?page=master&act=detailkelas&id=" . htmlspecialchars($id_mkelas) . "';
            </script>";
    } else {
        // Jika terjadi kesalahan saat menghapus data, tampilkan pesan error
        echo "Error: " . mysqli_error($con);
    }

    // Tutup prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Jika tidak ada query parameter yang diterima, tampilkan pesan error
    echo "Error: ID mahasiswa_kelas dan ID kelas tidak valid.";
}
?>