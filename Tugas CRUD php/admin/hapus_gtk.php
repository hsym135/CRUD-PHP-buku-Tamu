<?php 

require 'functions.php';

$id = $_GET["id"];

if(hapusGtk($id) > 0){
    echo"
    <script type=text/javascript>
        alert('Data berhasil di hapus');
        window.location = 'gtk.php';
    </script>
";
}else{
echo"
    <script type=text/javascript>
        alert('Data gagal di hapus');
        window.location = 'gtk.php';
    </script>
";
}

?>