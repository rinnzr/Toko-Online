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
    $qry_get_pelanggan=mysqli_query($conn,"select * from pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?>
    <div class="container col-15">
        <div class="col-md- py-5">
            <h3 align="center">Ubah Pelanggan</h3>
            <form action="proses_ubah_pelanggan.php" method="post">
                <input type="hidden" name="id_pelanggan" value= "<?=$dt_pelanggan['id_pelanggan']?>">
                Nama Pelanggan :
                <input type="text" name="nama" value= "<?=$dt_pelanggan['nama']?>" class="form-control">
                Alamat : 
                <textarea name="alamat" class="form-control" rows="4"><?=$dt_pelanggan['alamat']?></textarea>
                No telp :
                <input type="number" name="telp" value= "<?=$dt_pelanggan['telp']?>" class="form-control"> 
                <!-- value untuk menampilkan data dari database  -->
                
                Username : 
                <input type="text" name="username" value="<?=$dt_pelanggan['username']?>" class="form-control">
                Password : 
                <input type="password" name="password" value="" class="form-control">
                <div class="col-md- py-5">
                <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn" style="background-color:#251B37;color:white">
                </div>
                
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

