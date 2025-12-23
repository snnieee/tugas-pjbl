<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu - Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            max-width: 800px; /* Lebih lebar untuk tabel */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        th {
            background-color: #f7fafc;
            color: #4a5568;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f8fafc;
        }
        .empty-message {
            text-align: center;
            padding: 20px;
            color: #718096;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📋 Daftar Buku Tamu</h2>
        <p style="text-align: center; margin-bottom: 20px; color: #718096;">
            Berikut adalah pesan yang telah tersimpan di Database MySQL.
        </p>

        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM tamu ORDER BY waktu DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead>
                    <tr>
                        <th width='20%'>Waktu</th>
                        <th width='20%'>Nama</th>
                        <th width='25%'>Email</th>
                        <th width='35%'>Pesan</th>
                    </tr>
                  </thead>";
            echo "<tbody>";

            while($row = $result->fetch_assoc()) {
                $waktu = htmlspecialchars($row['waktu']);
                $nama = htmlspecialchars($row['nama']);
                $email = htmlspecialchars($row['email']);
                $pesan = htmlspecialchars($row['pesan']);
                
                echo "<tr>
                        <td style='font-size: 0.85rem; color: #718096;'>$waktu</td>
                        <td><strong>$nama</strong></td>
                        <td>$email</td>
                        <td>$pesan</td>
                      </tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<div class='empty-message'>Belum ada data tamu yang tersimpan di Database.</div>";
        }
        
        $conn->close();
        ?>

        <div style="margin-top: 30px; text-align: center;">
            <a href="index.php" class="back-btn">← Kembali ke Form Utama</a>
        </div>
    </div>
</body>
</html>
