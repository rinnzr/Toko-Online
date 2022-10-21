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
<div class="container col-15">
    <div class="col-md- py-5">
        <h3 align="center">Tambah Pelanggan</h3>
        <form action="proses_tambah_pelanggan.php" method="post">
            Nama Pelanggan :
            <input type="text" name="nama" value="" class="form-control" required>
            Alamat : 
            <textarea name="alamat" class="form-control" rows="4" required></textarea>
            No Telp :
            <input type="number" name="telp" value="" class="form-control" required>
            Username : 
            <input type="text" name="username" value="" class="form-control" required>
            Password : 
            <input type="password" name="password" value="" class="form-control"><br>
            <input type="submit" name="simpan" value="SUBMIT" class="btn" style="background-color:#251B37;color:white">
        </form>
    </div>
</div>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
