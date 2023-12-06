<?php
include('koneksi.php');
session_start();

$id_game = $_POST['id_game'];
$namaBaru = $_POST['nama_game'];
$tanggalBaru = $_POST['tanggal_release'];
$developerBaru = $_POST['developer'];
$deskripsiBaru = $_POST['deskripsi'];
$fotoBaru = $_POST['foto'];
$hargaBaru = $_POST['harga'];
$publisherBaru = $_POST['publisher'];

if (empty($namaBaru)) {
    echo "<script> alert ('Nama tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($tanggalBaru)) {
    echo "<script> alert ('Tanggal tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($developerBaru)) {
    echo "<script> alert('developer tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($deskripsiBaru)) {
    echo "<script> alert('deskripsi tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($fotoBaru)) {
    echo "<script> alert('foto tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($hargaBaru)) {
    echo "<script> alert('harga tidak boleh kosong'); location.href='ubah_game.php';</script>";
} elseif (empty($publisherBaru)) {
    echo "<script> alert('publisher tidak boleh kosong'); location.href='ubah_game.php';</script>";
} else {
    $update = mysqli_query($conn, "update game set nama_game ='$namaBaru', tanggal_release = '$tanggalBaru', developer = '$developerBaru', deskripsi = '$deskripsiBaru', foto = '$fotoBaru', harga = '$hargaBaru', publisher = '$publisherBaru' where id_game = '$id_game'");

    if ($update) {
        $_SESSION['token_ubah'] = array();
        header("location: tampil_game.php");
        exit();
    } else {
        $_SESSION['token_ubah'] = array();
        header("location: tampil_game.php");
        exit();
    }

}

?>