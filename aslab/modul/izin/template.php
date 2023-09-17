<!DOCTYPE html>
<html>
<head>
    <title>Data Izin</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Izin</h1>

    <?php
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sipl"; // Ganti dengan nama database kamu

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data dari tabel tb_izin
    $sql = "SELECT * FROM tb_izin";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan data dalam bentuk tabel
        echo "<table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Praktikum</th>
                    <th>Kelas</th>
                    <th>Kelompok</th>
                    <th>Tanggal</th>
                    <th>Alasan</th>
                    <th>Surat Izin</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["nim"] . "</td>
                    <td>" . $row["praktikum"] . "</td>
                    <td>" . $row["kelas"] . "</td>
                    <td>" . $row["kelompok"] . "</td>
                    <td>" . $row["tanggal"] . "</td>
                    <td>" . $row["alasan"] . "</td>
                    <td>" . $row["surat_izin"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data izin.";
    }

    // Tutup koneksi ke database
    $conn->close();
    ?>
</body>
</html>
