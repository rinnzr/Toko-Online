
<?php
session_start();
include "koneksi.php";
$cart = @$_SESSION['cart'];
$idPel = @$_SESSION['id_pelanggan'];
$date = date("Y-m-d");
if (count($cart) > 0) {
    $insert = "INSERT INTO transaksi (id_pelanggan, tgl_transaksi, status) VALUE ('$idPel', '$date', 'Menunggu Barang di Confirm')";
        
        mysqli_query($conn, $insert);
        $id = mysqli_insert_id($conn);
    foreach ($cart as $key_pdk => $val_pdk) {
        $idProd = $val_pdk['id_produk'];
        // echo $idProd;
        
        // mengambil id_transaksi yang telah baru saja dibeli 
        $val_pdk['qty'] ;
        $subtotal = $val_pdk['qty'] * $val_pdk['harga'];


        mysqli_query($conn, "insert into detail_transaksi(id_transaksi,qty,subtotal,id_produk) value('" . $id . "','" . $val_pdk['qty'] . "','" . $subtotal . "','".$idProd."')");
        mysqli_error($conn);
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
}
?>


<!-- batas////////// -->