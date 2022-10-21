<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas,username,password,role) value ('".$nama_petugas."','".$username."','".md5($password)."','".$role."')");
        
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
?>