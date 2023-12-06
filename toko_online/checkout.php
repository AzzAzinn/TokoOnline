<?php
session_start();
include "koneksi.php";
$cart = $_SESSION['cart'];

if(count($cart) > 0){
    $qry=mysqli_query($conn, "insert into pembelian_game(id_user, tanggal_beli) value ('".$_SESSION['id_user']."', '".date('Y-m-d')."')");
    $id = mysqli_insert_id($conn);

    if($qry){
        foreach($cart as $key_produk => $val_produk){
            $tes2 = mysqli_query($conn, "insert into detail_pembelian_game(id_pembelian_game, id_game, id_user, qty) value ('".$id."', '".$val_produk['id_game']."', '".$_SESSION['id_user']."','".$val_produk['qty']."')");
        }
    } else {
        echo mysqli_error($conn);
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli game");location.href="history.php"</script>';
}
?>