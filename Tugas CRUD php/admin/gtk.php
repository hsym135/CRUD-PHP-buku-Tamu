<?php 

session_start();
require 'functions.php';

$gtk = query("SELECT * FROM gtk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTK</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center">Data GTK SMKS Jakarta Pusat 1</h3>
        <table class="table align-middle table-hover mt-5">
  <thead>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Roles</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i= 1; ?>
            <?php foreach($gtk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td><img src="../foto/<?= $data["foto"]; ?>" alt="foto" width="80px" class="foto"></td>
                <td>
                    <a href="edit_gtk.php?id=<?= $data["id_gtk"]; ?>" class="aksi">Edit</a>
                    <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" class="aksi" onClick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
  </tbody>
</table>

    <div class="row text-center pt-5">
        <div class="col"><a href="tambah_gtk.php" class="tambah">Tambah Data</a></div>
        <div class="col"><a href="../index.php" class="tambah">Kembali</a></div>
    </div>

    </div>
</body>
</html>