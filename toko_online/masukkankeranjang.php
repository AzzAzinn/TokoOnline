<?php
session_start();
include "koneksi.php";

if($_POST){
    $qry_get_game=mysqli_query($conn, "select * from game where id_game = '".$_GET['id_game']."'");
    $dt_game=mysqli_fetch_array($qry_get_game);

    $_SESSION['cart'][] = array('id_game'=>$dt_game['id_game'],
    'nama_game'=>$dt_game['nama_game'],
    'deskripsi'=>$dt_game['deskripsi'],
    'harga'=>$dt_game['harga'],
    'foto'=>$dt_game['foto'],
    'qty'=>$_POST['jumlah_beli']
    );
} 
header('location: keranjang.php');
?>