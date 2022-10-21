<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat      =$_POST['alamat'];
    $telp        =$_POST['telp'];
    $username    =$_POST['username'];
    $password    =$_POST['password'];
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp, username, password) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
?>