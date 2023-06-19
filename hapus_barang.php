<?php
include 'function.php';
$id = $_GET["kodebarang"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM product WHERE kodebarang='$id' ";
    $hasil_query = mysqli_query($function, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($function).
       " - ".mysqli_error($function));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='home_staff.php';</script>";
    }
?>