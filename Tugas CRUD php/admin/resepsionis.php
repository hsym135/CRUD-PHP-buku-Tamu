<?php 

session_start();
require 'functions.php';
$resepsionis = query("SELECT * FROM resepsionis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepsionis</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center">Data Resepsionis</h3>
        <table class="table align-middle table-hover mt-5">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Roles</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
                
            <?php $i= 1; ?>
            <?php foreach($resepsionis as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" class="aksi">Edit</a>
                    <a href="hapus_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" class="aksi" onClick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ?>
            </tbody>
        </table>
        <div class="row text-center pt-5">
        <div class="col"><a href="tambah_resepsionis.php" class="tambah">Tambah Data</a></div>
        <div class="col"><a href="../index.php" class="tambah">Kembali</a></div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>