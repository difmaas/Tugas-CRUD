<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Daftar barang yang tercatat</h1>
    </header>
    <table class="barang-table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Ruangan</th>
                <th>Jumlah Barang</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data tabel akan dimuat di sini dari database -->
        </tbody>
    </table>

    <!-- Tombol Kembali dan Tambah -->
    <div class="button-container">
        <button class="add-btn">Tambah</button>
        <button class="back-btn" onclick="goBack();">Kembali</button>
    </div>

    <script>
        function goBack() {
            // Menonaktifkan hover sementara setelah tombol diklik
            const backButton = document.querySelector('.back-btn');
            backButton.style.pointerEvents = 'none';

            // Mengembalikan pengguna ke halaman sebelumnya
            window.history.back();

            // Mengaktifkan kembali hover setelah beberapa waktu
            setTimeout(function() {
                backButton.style.pointerEvents = 'auto';
            }, 1000); // Durasi menunggu (1000ms = 1 detik)
        }
    </script>
</body>
</html>