<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$role  = $_POST['role'];

$q = mysqli_query($conn, "select * from pelanggan where username='".$username."' and password='".md5($password)."' and role='".$role."'");

$q2 = mysqli_query($conn,"select * from petugas where username='".$username."' and password='".md5($password)."' and role='".$role."'");

if(mysqli_num_rows($q)>0){
    $r=mysqli_fetch_array($q);
 
    if ($r['role']=="pelanggan") {
        $_SESSION['nama'] = $r['nama'];
        $_SESSION['id_pelanggan'] = $r['id_pelanggan'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['password'] = $r['password'];
        $_SESSION['status_login']=true;
        header('location:/toko-online/pelanggan/home.php');
    }
}

else if(mysqli_num_rows($q2)>0){
    $row=mysqli_fetch_array($q2);
   
    if ($row['role']=="admin" ) {
        $_SESSION['nama_petugas'] = $row['nama_petugas'];
        $_SESSION['id_petugas'] = $row['id_petugas'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['status_login']=true;
        $_SESSION['role']=$row['role']; 
        $_SESSION['role']=="admin";
        header('location:/toko-online/petugas/home.php');
    
    }
    else{
        if ($row['role']=="petugas" ) {
            $_SESSION['nama_petugas'] = $row['nama_petugas'];
            $_SESSION['id_petugas'] = $row['id_petugas'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['status_login']=true;
            $_SESSION['role']=$row['role'];
            $_SESSION['role']=="petugas";
            header('location:/toko-online/petugas/home.php');
        
        }

    }
}

else {
    echo "<script>alert('coba cek lagi');location.href='login.php';</script>"; 
}