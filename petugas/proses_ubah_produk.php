<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['desk'];
    $harga=$_POST['harga'];
    $foto=$_POST['foto_produk'];

    if(empty($nama_produk)){
        echo "<script>alert('Nama produk tidak boleh kosong');location.href='ubah_produk.php';</script>";    
    } elseif(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='ubah_produk.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga tidak boleh kosong');location.href='ubah_produk.php';</script>";
    
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."',harga='".$harga."',foto_produk='".$foto."' where id_produk = '".$id_produk."' ") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update produk');location.href='produk.php';</script>";
        } else {
            echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
        }
    }
}
?>