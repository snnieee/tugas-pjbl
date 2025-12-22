<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu - Pastel Blue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>✨ Buku Tamu</h2>
        <p style="text-align: center; margin-bottom: 20px; color: #718096;">Silakan isi form di bawah ini untuk meninggalkan pesan.</p>
        
        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda..." required>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
            </div>

            <button type="submit">Kirim Pesan ➜</button>
        </form>

        <div style="margin-top: 20px; text-align: center;">
            <a href="daftar_tamu.php" style="color: #89cff0; text-decoration: none; font-size: 0.9rem;">📋 Lihat Daftar Tamu</a>
        </div>
    </div>
</body>
</html>
