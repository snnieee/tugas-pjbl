<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil dan sanitasi data input
            $nama = htmlspecialchars(trim($_POST['nama']));
            $email = htmlspecialchars(trim($_POST['email']));
            $pesan = htmlspecialchars(trim($_POST['pesan']));

            // Validasi sederhana (jika diperlukan tambahan selain 'required' di HTML)
            if (!empty($nama) && !empty($email) && !empty($pesan)) {
                // MENYIMPAN DATA KE FILE TEXT (bukutamu.txt)
                $file = 'bukutamu.txt';
                $tanggal = date("Y-m-d H:i:s");
                // Format data: Waktu | Nama | Email | Pesan (pemisah menggunakan pipe |)
                $data_entry = "$tanggal | $nama | $email | $pesan" . PHP_EOL;
                
                // Menambahkan data ke file (FILE_APPEND agar tidak menimpa data lama)
                file_put_contents($file, $data_entry, FILE_APPEND | LOCK_EX);
        ?>
                <h2>🎉 Pesan Diterima & Disimpan!</h2>
                <p style="text-align: center; color: #718096; margin-bottom: 20px;">
                    Terima kasih telah menghubungi kami. Data Anda telah berhasil disimpan.
                </p>
                
                <div class="result-card">
                    <div class="result-item">
                        <span class="result-label">Nama:</span>
                        <div class="result-value"><?php echo $nama; ?></div>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">Email:</span>
                        <div class="result-value"><?php echo $email; ?></div>
                    </div>
                    
                    <div class="result-item">
                        <span class="result-label">Pesan:</span>
                        <div class="result-value"><?php echo nl2br($pesan); ?></div>
                    </div>
                </div>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="daftar_tamu.php" class="back-btn" style="display: inline-block; margin-right: 10px;">📋 Lihat Daftar Tamu</a>
                    <a href="index.php" class="back-btn" style="display: inline-block;">← Kembali ke Form</a>
                </div>
        <?php
            } else {
                // Jika ada data kosong
                echo "<h2>⚠️ Data Tidak Lengkap</h2>";
                echo "<p style='text-align:center;'>Mohon lengkapi semua kolom form.</p>";
                echo "<a href='index.php' class='back-btn'>← Kembali</a>";
            }
        } else {
            // Jika halaman diakses langsung tanpa submit form
            echo "<h2>⛔ Akses Ditolak</h2>";
            echo "<p style='text-align:center;'>Silakan isi form terlebih dahulu.</p>";
            echo "<a href='index.php' class='back-btn'>Ke Halaman Utama</a>";
        }
        ?>
    </div>
</body>
</html>
