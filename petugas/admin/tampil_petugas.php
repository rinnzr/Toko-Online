<?php
include "../header.php"; 
?>
<!DOCTYPE html>
<html>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../edit.css">
    <title>Petugas</title>
</head>
<body>
    <h3 align="center" style="margin:30px 0 35px">Petugas Toko Online</h3>
    <table class="table" style="background-color:#251B37;color:white">
        <thead style="background-color:#FFCACA;color:#251B37 ">
            <tr>
                <th>NO</th>
                <th>NAMA PETUGAS</th>
                <th>EMAIL</th>
                <th>LEVEL</th><th></th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "../koneksi.php";
            $qry_petugas=mysqli_query($conn,"select * from petugas");
            $no=0;
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
            $no++;?>
            <tr>            
                <td><?=$no?>
                </td><td><?=$data_petugas['nama_petugas']?></td> 
                <td><?=$data_petugas['username']?></td>
                <td><?=$data_petugas['role']?></td><th></th>
                <td><a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-success">Ubah<a>
                    |<a href="hapus_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" 
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_petugas.php" type="button" class="btn" style="background-color:#FFCACA;" >
        Tambah Petugas 
        </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
