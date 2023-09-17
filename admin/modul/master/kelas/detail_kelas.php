<div class="page-inner">
    <?php
    // Pastikan variabel global $con sudah didefinisikan sebelumnya
    
    // Ambil ID kelas dari query parameter
    $id_kelas = $_GET['id'];

    // Retrieve the class name from the query parameter
    $nama_kelas = isset($_GET['nama_kelas']) ? $_GET['nama_kelas'] : 'Kelas Tidak Ditemukan';
    ?>

    <h2>Daftar Mahasiswa di Kelas
        <?= htmlspecialchars($nama_kelas) ?>:
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <?php
                    // Pastikan variabel global $con sudah didefinisikan sebelumnya
                    
                    // Ambil ID kelas dari query parameter
                    $id_kelas = $_GET['id'];

                    // Query untuk mendapatkan data mahasiswa pada kelas yang dipilih, diurutkan berdasarkan NIM
                    $detailkelas = "SELECT m.nim, m.nama_mahasiswa, mk.id_mhskelas
                                FROM tb_mahasiswa m
                                INNER JOIN tb_mahasiswa_kelas mk ON m.id_mahasiswa = mk.id_mahasiswa
                                WHERE mk.id_mkelas = $id_kelas
                                ORDER BY m.nim"; // Added ORDER BY clause here to sort based on NIM
                    
                    // Eksekusi query menggunakan variabel global $con
                    $result = $con->query($detailkelas);

                    // Cek apakah ada data yang ditemukan
                    if ($result->num_rows > 0) {
                        echo "<table id='basic-datatables'class='display table table-striped table-hover'>
                                    <thead>
                                        <tr>
                                            <th scope='col'>#</th>
                                            <th scope='col'>NIM</th>
                                            <th scope='col'>Nama Mahasiswa</th>
                                            <th scope='col'>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";

                        // Counter variable for row numbers
                        $counter = 1;

                        // Tampilkan data mahasiswa dalam tabel
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $counter . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama_mahasiswa'] . "</td>";
                            echo "<td>
                                        <a href='?page=master&act=delete_mahasiswa&id_mhskelas=" . $row['id_mhskelas'] . "&id_mkelas=" . $id_kelas . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin Hapus Data Mahasiswa?\")'>
                                            <i class='fas fa-trash'></i> Delete
                                        </a>
                                    </td>";
                            echo "</tr>";

                            // Increment the counter
                            $counter++;
                        }
                        echo "</tbody></table>";
                    } else {
                        echo "<p>Tidak ada data mahasiswa di kelas ini.</p>";
                    }

                    // Tutup hasil query
                    $result->free_result();
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>