<?php

    require_once('koneksi/koneksi.php');

    if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
        $deleteSQL = sprintf("DELETE FROM produk WHERE idproduk=%s",
                             inj($koneksi, $_GET['id'], "int"));
         
        $Result1 = mysqli_query($koneksi, $deleteSQL) or die(errorQuery(mysqli_error($koneksi))); 
      }
      
?>

<h3>Data Berhasil Dihapus</h3>
<a href="?page=produk/read">Kembali</a>