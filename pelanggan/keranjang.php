<?php 
    include "header.php";
?>
<div class="container rounded" style="margin-top:10px">
    <h2 align="center" style="margin:30px 0 35px">Keranjang Produk</h2>
    <table class="table table-hover striped" style="background-color:#C6ADC6">
        <thead style="background:#F8F8F8;">
            <tr>
                <th>NO</th>
                <th>ID Produk</th>
                <th>Name Produk</th>
                <th>Harga</th>
                <th>Jumlah Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
            ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['id_produk']?></td>
                    <td><?=$val_produk['nama_produk']?></td>
                    <td><?=$val_produk['harga'] *$val_produk['qty'] ?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
        <a href="checkout.php" class="btn" style="background-color:#733773; color:white;">Check Out</a>
</div>
<?php 
    include "footer.php";
?>

