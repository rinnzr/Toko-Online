<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    
<title></title>
<link rel="stylesheet" href="edit.css">
</head>
<body style="background-color:#FFECEF">
<nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 4px 4px 5px -4px;background-color:#372948;font-color:white;">
      <div class="container-fluid">
        <a class="navbar-brand"style="color:white"  href="#"><b>TRENDY</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" style="margin-left:400px">
                <a class="nav-link active" style="color:white" aria-current="page" href="/toko-online/petugas/home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:white" aria-current="page" href="/toko-online/petugas/produk.php">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:white" aria-current="page" href="/toko-online/petugas/tampil_pelanggan.php">Pelanggan</a>
              </li>

            <!-- ADMIN -->

              <li class="nav-item">
                <a class="nav-link" style="color:white" aria-current="page" href="/toko-online/petugas/admin/tampil_petugas.php">Petugas</a>
              </li>
              

              <li class="nav-item">
                <a class="nav-link" style="color:white" aria-current="page" href="/toko-online/petugas/histori_pembelian.php">Transaksi</a>
              </li>
              <li class="nav-item" style="margin-left:480px; background-color:red; border-radius:10px">
                <a class="nav-link" aria-current="page" style="color:white" href="/toko-online/logout.php">Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <div class="container rounded" style="margin-top:10px;">

