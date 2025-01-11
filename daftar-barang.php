<?php
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Barang</title>
</head>
<body>
    <header>
        <h1>Daftar barang</h1>
        <p>Berikut adalah daftar barang dan inventori yang sudah dicatat</p>
    </header>
    <table>
        <thead>
          <tr>
            <th scope="col"><h2>No</h2></th>
            <th scope="col"><h2>Nama Barang</h2></th>
            <th scope="col"><h2>Ruangan</h2></th>
            <th scope="col"><h2>Jumlah</h2></th>
            <th scope="col"><h2>Opsi</h2></th>
           </tr>
        </thead>
          <?php
          ?>
        <tbody>
          <?php
            ?>
        </tbody>  
      </table>
      <ul>
      <li><a href="tambah-barang.php">Tambah daftar barang</a></li>
      <li><a href="index.php">Kembali</a></li>

      </ul>
</body>
</html>