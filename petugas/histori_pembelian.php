<?php
    include "header.php";
    error_reporting(E_ERROR | E_PARSE);
?>
<h2 align="center" style="margin:30px">Transaksi Petugas</h2>
<table class="table " style="background:#F8F8F8;width:100%">
    <thead style="background:#C6ADC6; ">
        <th>NO</th>
        <th>Tanggal Beli</th>
        <th>Nama Produk</th>
        <th>Total</th> 
        <th>Status</th> 
        <th colspan="8">Aksi</th>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $qry_histori=mysqli_query($conn,"select * from transaksi  order by id_transaksi desc;");
            $no=0;
            while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
                

        ?>

            <tr>  
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td>
                    <?php
                    $qry_histori1=mysqli_query($conn,"select * from detail_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk where  id_transaksi='".$dt_histori['id_transaksi']."'");
                    while($dt_histori1=mysqli_fetch_array($qry_histori1)){
                    
                        //menampilkan status 
                        if ($dt_histori['status'] == 'Menunggu Barang di Confirm') {
                            $button="<a href='barang_baru.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Confirm Produk?\")'>Confirm Produk</a>";
                        }
                        else if ($dt_histori['status'] == 'Barang Sudah di Confirm') {
                            $button="<a href='barang_dikemas.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Produk otw di Kemas\")'>Produk di Kemas</a>";
                        }
                        else if ($dt_histori['status'] == 'Produk Sedang di Kemas') {
                            $button="<a href='barang_dikirim.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Produk berhasil di Kirim\")'>Barang di Kirim</a>";
                        }
                        else if ($dt_histori['status'] == 'Produk berhasil di Kirim') {
                        }
                        else{
                            $button="";
                        }
                    ?>
                    <?=$dt_histori1['nama_produk']?>
                    <td><?="<span>Rp. </span>".$dt_histori1['subtotal']?></td>
                    <td><?=$dt_histori['status']?></td>                    
                    <td><?=$button?></td>
                </li>
                    <?php 
                    } 
                    ?>
                    
                </td>
                <td><?=$hapus?></td> 
                <td>
            </tr>
            <?php
                }
                
        ?>
       
    </tbody>
</table>
<a href="produk_.php" class="btn" style="background: #C6ADC6">Yakin udah puas?</a>


<!-- batas//////// -->