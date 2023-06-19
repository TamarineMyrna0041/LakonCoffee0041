<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'function.php';

  $nama_produk   = $_POST['namabarang'];
  $harga_jual    = $_POST['jumlah'];
  $gambar_produk = $_FILES['gambar']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                  $query = "INSERT INTO product (namabarang, jumlah, gambar) VALUES ('$nama_produk',  '$harga_jual', '$nama_gambar_baru')";
                  $result = mysqli_query($function, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($function).
                           " - ".mysqli_error($function));
                  } else {

                    echo "<script>alert('Data berhasil ditambah.');window.location='home_staff.php';</script>";
                  }

            } else {     

                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
            }
} else {
   $query = "INSERT INTO produk (namabarang, jumlah, gambar) VALUES ('$nama_produk', '$harga_jual', null)";
                  $result = mysqli_query($function, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($function).
                           " - ".mysqli_error($function));
                  } else {

                    echo "<script>alert('Data berhasil ditambah.');window.location='home_staff.php';</script>";
                  }
}