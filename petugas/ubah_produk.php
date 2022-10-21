<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_get_produk);
    ?>
    <div class="container col-15">
        <div class="col-md- py-5">
            <h3 align="center">Ubah Produk</h3>
            <form action="proses_ubah_produk.php" method="post">
                <input type="hidden" name="id_produk" value= "<?=$dt_produk['id_produk']?>">
                Nama Produk :
                <input type="text" name="nama_produk" value= "<?=$dt_produk['nama_produk']?>" class="form-control">
                Deskripsi : <br>
                <textarea id="" name="desk" value= "<?=$dt_produk['deskripsi']?>" rows="4" cols="50" required></textarea><br>
                Harga:
                <input type="number" name="harga" value= "<?=$dt_produk['harga']?>" class="form-control">
                Foto Produk:
                <input type="file" name="foto_produk" value= "<?=$dt_produk['foto_produk']?>"  class="form-control"> <br>

                <div class="col-md- py-5">
                <input type="submit" name="simpan" value="SUBMIT" class="btn btn-primary">
                </div>
                
                
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

