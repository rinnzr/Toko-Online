<?php
include 'header_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title >Penambahan Produk</title>
</head>
<body>
<div class="container col-15">
        <div class="col-md- py-5">
            <h3 align="center">Tambah Produk</h3>
            <form action="proses_tambah_produk_admin.php" method="post" enctype="multipart/form-data">
                Nama Produk  :
                <input type="text" name="nama_produk" value="" class="form-control">
                Deskripsi : <br>
                <textarea id="" name="desk" rows="4" cols="50" required></textarea><br>
                Harga:
                <input type="number" name="harga" value="" class="form-control">
                Foto Produk:
                <input type="file" name="foto_produk" value=""  class="form-control"> <br>
                <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>