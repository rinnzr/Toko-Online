<?php 
    include "header_admin.php";
?>
    <h2 align="center">Selamat Datang <?=$_SESSION['nama_petugas']?> di website Toko Online.</h2>
<div>
    <img src="https://ceklist.id/wp-content/uploads/2022/03/Baju-Terkenal.jpg"
    class="img-fluid" alt="background" style="width: 1400px">
    <div class="carousel-caption">
        <h1 class="display-4 text-secondary"><strong>TOKO ONLINE<strong></h1>
        <p class="lead text-dark bg-light">Selamat untuk berbelanja di toko kami terdapat aneka baju, celnana, sepatu, dan juga sandal</p>
        <hr class="my-4">
        <p class="text-danger">Halo ADMIN Semangat untuk Bertugas</p>
        <h3>Hanya di</h3>
        <a href="produk.php" class="btn btn-primary btn-lg" >Toko Online</a>
    </div>
</div>  
<div></div>
<?php
    include "footer.php";
?>  