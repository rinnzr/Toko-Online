<?php
include "header_admin.php"; 
?>
<h2 align="center">Daftar Produk</h2>
    <form method="post" action="produk.php" class="d-flex">
        <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type ="submit">Search</button>
    </form>
    
<div class="row">
        <?php 
            include "../koneksi.php";
            if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $qry_produk=mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or deskripsi like '%$cari%'");
            }
            else{
                $qry_produk = mysqli_query($conn, "select * from produk");
            }
            $no = 0;
            while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                $no++;
        ?>
            <div class="col-md-3">
                <div class="card mt-3 bg-warning" >
                    <img src="/toko-online/img/<?=$dt_produk['foto_produk']?>" class="card-img-top" width="180px" height="260px">
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                        <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,30)?></p>
                        <p class="card-text"><?=substr($dt_produk['harga'], 0,30)?></p>

                        <a href="ubah_produk_admin.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-success">Ubah<a>
                        <a href="hapus_produk.php?id_produk=<?=$dt_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>


                        


                    </div>
                </div>  
            </div>
        <?php
        }
        ?>
</div>

    <div>
        <br>
        <a href="tambah_produk_admin.php" class="btn btn-primary">Tambah Produk</a>
    </div>
<?php
include "../footer.php";
?>  