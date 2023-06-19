<?php
  include('connection.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

  
?>
<!DOCTYPE html>
<html>

<head>
    <title>Produk BeiBei</title>
    <style type="text/css">
    * {
        font-family: "Trebuchet MS";
    }

    body {
        /* background-color : #dcc8b0; */
        background-image: url('5.png');
        background-size: cover;
    }

    h1 {
        text-transform: uppercase;
        color: #b78159;
    }

    table {
        border: solid 1px #f8cc9c;
        border-collapse: collapse;
        border-spacing: 0;
        width: 70%;
        margin: 10px auto 10px auto;
    }

    table thead th {
        background-color: #f8cc9c;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }

    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

    a {
        background-color: #b78159;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        font-size: 12px;
    }
    </style>
</head>

<body>
    <center>
        <h1>List Barang Kitchen</h1>
        <center>
            <center><a href="tambah.php">+ &nbsp; Tambah Produk</a>
                <center>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah/Keadaan</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
      
      $query = "SELECT * FROM product ORDER BY kodebarang ASC";
      $result = mysqli_query($db, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['namabarang']; ?></td>
                                <td><?php echo $row['jumlah']; ?></td>
                                <td style="text-align: center;">
                                    <img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;">
                                </td>
                                <td>
                                    <a href="edit.php?kodebarang=<?php echo $row['kodebarang']; ?>">Edit</a> |
                                    <a href="hapus_barang.php?kodebarang=<?php echo $row['kodebarang']; ?>"
                                        onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>

                            <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
                        </tbody>
                    </table>
                    <div class="tutup"><center><a href="menu_staff.php">Kembali</a></div>
</body>

</html>