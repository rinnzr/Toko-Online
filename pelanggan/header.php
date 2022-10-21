<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title></title>
</head>
<style>
  
</style>
<body style="background-color:#EEE7EE">
    <nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 4px 4px 5px -4px;background-color:#733773;font-color:white;">
      <div class="container-fluid" >
        <a class="navbar-brand" style="color:white; margin-left:20px" href="#"><b>TRENDY</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" style="margin-left:450px">
                <a class="nav-link active" aria-current="page"style="color:white" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white" href="produk_.php">Produk</a>
              </li><li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white" href="keranjang.php">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white" style="color:white" href="histori_pembelian.php">Transaksi</a>
              </li>
              <li class="nav-item" style="margin-left:530px; background-color:red; border-radius:10px">
                <a class="nav-link" aria-current="page" style="color:white" href="/toko-online/logout.php">Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

