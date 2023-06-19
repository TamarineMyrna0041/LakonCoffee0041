<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "cafe"; //nama database
  $function = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$function){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>