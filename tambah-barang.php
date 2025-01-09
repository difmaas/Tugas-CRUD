<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Daftar Barang Baru</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Tambah Daftar Barang Baru</h1>
    <form action="daftar-barang.php" method="POST">
        <!-- Nama Barang -->
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>

        <!-- Ruangan -->
        <label for="ruangan">Ruangan:</label>
        <input type="text" id="ruangan" name="ruangan" required>

        <!-- Banyaknya Unit -->
        <label for="banyaknya_unit">Banyaknya Unit:</label>
        <input type="number" id="banyaknya_unit" name="unit" required>

        <!-- Tombol Submit -->
        <div class="button-container">
            <button class="add-btn1" type="submit">submit</button>
            <button class="add-btn1"><a href="daftar-barang.php">Kembali</a></button>
        </div>
    </form>
</div>

</body>
</html>
