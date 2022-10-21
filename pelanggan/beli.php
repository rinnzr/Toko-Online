<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<div class="container rounded" style="margin-top:10px">
    <h2 align="center" style="margin:30px 0 35px">Beli Produk</h2>
    <div class="row" style="background-color:#C6ADC6">
        <div class="col-md-4">
            <img src="/toko-online/img/<?=$dt_produk['foto_produk']?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                <table class="table table-hover table-striped text-white">
                    <thead style="color:#733773; font-weight:500">
                        <tr>
                            <td>Name Produk</td><td><?=$dt_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td><td><?=$dt_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk</td><td><input type="number" name="qty" value="1" 
                                style="border-radius:20px; border:none; padding:0 0 0 10px"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn" style="background-color:#733773; color:white"type="submit" value="Beli"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>
<?php 
    include "footer.php";
?>

