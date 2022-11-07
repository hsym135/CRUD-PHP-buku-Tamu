<?php 

session_start();
require 'functions.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editGtk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data Guru berhasil diedit');
                window.location = 'gtk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data Guru gagal diedit');
            window.location = 'gtk.php'
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit GTK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

        <h3 class="text-center">Tambah Data Produk</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">

            <div class="mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"] ?>">
            </div>
            <div class="mb-3">
            <label for="job">Job</label>
            <input type="text" name="job" id="job" class="form-control" value="<?= $gtk["job"] ?>">
            </div>
            <div class="mb-3">
            <label for="roles">Roles</label>
            <select name="roles" class="form-control" value="<?= $gtk["roles"];?>">
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"] ?>">
            </div>

            <button type="submit" name="kirim" class="tambah">Tambah</button>
        </form>
    </div>
</body>
</html>