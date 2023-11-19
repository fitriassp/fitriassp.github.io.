<?php 
// koneksi
$koneksi = mysqli_connect("localhost", "root", "", "loginal");

if (!$koneksi) {
    echo "Koneksi Gagal" .mysqli_connect_error();
                                                    }


                                                ?>


<!DOCTYPE html>
<html>
<head>
<title>Cari data</title>
                        </head>

<body>
<h1>    Data        </h1>
<form method="get" action="">
    <label for="cari"></label>
    <input type="text" name="cari">
</form>

<br>

<table border="1">
    <thead>
            <tr>
                    <td>    No.     </td> 
                    <td>Nama Produk </td> 
                    <td>Harga       </td> 
                    <td>Stok        </td>
            </tr>
    <tbody>
        <?php
        //Tampilkan Data Produk
        $sql = mysqli_query($koneksi,"SELECT * FROM .....");
         while ($dt= mysqli_fetch_assoc($sql)){
        ?>
        <tr>
    <td><?= $no++; ?></td> 
    <td><?= $dt['nama_produk']; ?></td>
    <td><?= $dt['harga']; ?></td>
    <td><?= $dt['stok']; ?></td>
    
    </tr>
    <?php
                                                    }
         
                                                                 ?>
    <?php ?>
                                                                    </tbody>

                                                                                </thead>

                            </body>


</html>