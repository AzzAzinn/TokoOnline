<?php
include('koneksi.php');
session_start();

$nama_game = $_POST['nama_game'];
$tanggal = $_POST['tanggal_release'];
$developer = $_POST['developer'];
$deskripsi = $_POST['deskripsi'];
$foto = $_POST['foto'];
$harga = $_POST['harga'];
$publisher = $_POST['publisher'];

if(empty($nama_game)){
    echo "<script> alert ('Nama game tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($tanggal)){
    echo "<script> alert ('Tanggal release tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($developer)){
    echo "<script> alert('Developer tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($deskripsi)){
    echo "<script> alert('Deskripsi tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($foto)){
    echo "<script> alert('Foto tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($harga)){
    echo "<script> alert('Harga tidak boleh kosong'); location.href='tambah_game.php';</script>";
} elseif(empty($publisher)){
    echo "<script> alert('Publisher tidak boleh kosong'); location.href='tambah_game.php';</script>";
} else {
    $insert = mysqli_query($conn, "insert into game(nama_game, tanggal_release, developer, deskripsi, foto, harga, publisher) value
    ('".$nama_game."', '".$tanggal."', '".$developer."', '".$deskripsi."', '".$foto."', '".$harga."', '".$publisher."')") or die(mysqli_error($conn));
    if($insert){
        $_SESSION['token_ubah'] = array();
        echo "<script> alert ('Sukses menambahkan'); location.href='tampil_game.php';</script>";
        header('login.php');
        exit();
    } else {
        $_SESSION['token_ubah'] = array();
        echo "<script> alert ('Sukses menambahkan'); location.href='tampil_game.php';</script>";
        header('login.php');
        exit();
    }
}

?>