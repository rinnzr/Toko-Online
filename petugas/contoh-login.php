

<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo '<script>alert("Username tidak boleh kosong")</script>';
    }elseif(empty($password)){
        echo '<script>alert("password tidak boleh kosong")</script>';
    } 
    if{
        include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from pelanggan where username = '".$username."' and password = '".md5($password) ."'");  //untuk mengeksekusi (delete,)
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_pelanggan']=$dt_login['id_pelanggan']; //menyimpan data agar tersimpan lebih lama session
            $_SESSION['nama']=$dt_login['nama'];
            $_SESSION['status_login']=true; 
            header("location: home.php");
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
    if{
        include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password) ."'");  //untuk mengeksekusi (delete,)
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_petugas']=$dt_login['id_petugas']; //menyimpan data agar tersimpan lebih lama session
            $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
            $_SESSION['status_login']=true; 
            header("location: home.php");
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
    }
else {
    echo "no";
}
?>

<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username)){
        echo '<script>alert("Username tidak boleh kosong")</script>';
    }elseif(empty($password)){
        echo '<script>alert("password tidak boleh kosong")</script>';

    } else{
        include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from pelanggan where username = '".$username."' and password = '".md5($password) ."'");  //untuk mengeksekusi (delete,)
            
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
        
        if($dt_login=='petugas'){ 
            //Petugas
            session_start();
            $_SESSION['id_petugas']=$dt_login['id_petugas']; //menyimpan data agar tersimpan lebih lama session
            $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
            $_SESSION['status_login']=true; 
            header("location: ../petugas../home.php");

        } else { 
            //Pelanggan
            session_start();
            $_SESSION['id_pelanggan']=$dt_login['id_pelanggan']; //menyimpan data agar tersimpan lebih lama session
            $_SESSION['nama']=$dt_login['nama'];
            $_SESSION['status_login']=true; 
            header("location: ../pelanggan../home.php");
        }
    }
    else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    
    }
}else {
    echo "no";
}
?>


<?php

include 'koneksi.php';

//login
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo '<script>alert("Username tidak boleh kosong")</script>';
    }elseif(empty($password)){
        echo '<script>alert("password tidak boleh kosong")</script>';
    }
    $qry_login=mysqli_query($conn,"select * from pelanggan where username = '".$username."' and password = '".md5($password) ."'");  //untuk mengeksekusi (delete,)

    //Pelanggan
    if(mysqli_num_rows($qry_login)>0){
        $dt_login=mysqli_fetch_array($qry_login);
        session_start();
        $_SESSION['id_pelanggan']=$dt_login['id_pelanggan']; //menyimpan data agar tersimpan lebih lama session
        $_SESSION['nama']=$dt_login['nama'];
        $_SESSION['status_login']=true; 
        header("location: home.php");
        
    //Petugas
    }elseif(mysqli_num_rows($qry_login)=='petugas'){
        $dt_login=mysqli_fetch_array($qry_login);
        session_start();
        $_SESSION['id_petugas']=$dt_login['id_petugas']; //menyimpan data agar tersimpan lebih lama session
        $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
        $_SESSION['status_login']=true; 
        header("location: home.php");
    } else {
        echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
    }
}
else {
    echo "no";
}