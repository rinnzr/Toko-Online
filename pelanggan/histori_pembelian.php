<?php
    include "header.php";
    error_reporting(E_ERROR | E_PARSE);
?>
<div class="container rounded" style="margin-top:15px">
<h2 align="center">Histori Pembelian</h2>
<table class="table " style="background:#F8F8F8">
    <thead style="background:#C6ADC6;margin-top:30px ">
        <th>NO</th>
        <th>Tanggal Beli</th>
        <th>Nama Produk</th>
        <th>Foto</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Status</th>
        <th colspan="3">Aksi</th>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
           // $qry_histori=mysqli_query($conn,"select produk.nama_produk, transaksi.tgl_transaksi, qty, produk.harga, produk.foto_produk, detail_transaksi.subtotal, transaksi.id_transaksi from transaksi JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk where transaksi.id_pelanggan = '".$_SESSION['id_pelanggan']."' order by id_detail_transaksi desc;");
           $qry_histori=mysqli_query($conn,"select * from transaksi join pelanggan on pelanggan.id_pelanggan=transaksi.id_pelanggan where transaksi.id_pelanggan = '".$_SESSION['id_pelanggan']."' order by id_transaksi desc;");
           $no=0;
            if (mysqli_num_rows($qry_histori) > 0) {
                while($dt_histori=mysqli_fetch_array($qry_histori)){

            $no++;


            // menampilkan status sudah diterima atau belum 
            $qry_cek_diterima=mysqli_query($conn,"select * from transaksi where status = '".$dt_histori['status']."'");
            $dt_diterima=mysqli_fetch_array($qry_cek_diterima);
            if($dt_diterima['status'] =='Produk Sudah di Terima'){

                $status_diterima="<label class='alert alert-success'>Barang Sudah diterima</label>";
                $button_diterima="";
            } else 
                $status_diterima="<label class='alert alert-danger'>".$dt_histori['status']."</label>";

                if($dt_diterima['status'] == 'Produk berhasil di Kirim'){
                    $button_diterima="<a href='diterima.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Produk berhasil diterima\")'>Diterima</a>";
                }
                else{
                    $button_diterima="";
                }
                
            


           
        ?>

            <tr>  
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td>
                    <ul>
                    <?php
                    $qry_histori1=mysqli_query($conn,"select * from detail_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk where  id_transaksi='".$dt_histori['id_transaksi']."'");
                    
                    while($dt_histori1=mysqli_fetch_array($qry_histori1)){
                    ?>
                    <?=$dt_histori1['nama_produk']?><br>
                    <td><img src="../img/<?=$dt_histori1['foto_produk']?>" width="100px"></td>
                    <td><?=$dt_histori1['qty']?></td><br>
                    <td><?="<span>Rp. </span>".$dt_histori1['harga']?></td>
                    <td><?="<span>Rp. </span>".$dt_histori1['subtotal']?></td>
                    <td><?=$status_diterima?></td>
                    <td><?=$button_diterima?></td>
                </li>
                    <?php 
                    } 
                    ?>
                    </ul>
                </td>
                <td><?=$hapus?></td> 
                <td>
            </tr>
            <?php
                }
            } else {
                echo("
                <tr>
                 <td colspan='8'><p style='text-align:center'>Tidak Ada Histori</p></td>
                </tr>  
                ");
             }
        ?>
       
    </tbody>
</table>
<a href="produk_.php" class="btn" style="background: #C6ADC6">Yakin udah puas?</a>


<!-- batas//////// -->