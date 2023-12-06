<?php
include('koneksi.php');
session_start();

$id_user = $_POST['id_user'];
$namaBaru = $_POST['nama_pelanggan'];
$tanggalBaru = $_POST['tanggal_lahir'];
$genderBaru = $_POST['gender'];
$alamatBaru = $_POST['alamat'];
$usernameBaru = $_POST['username'];
$passwordBaru = $_POST['pass'];
$levelBaru = $_POST['level'];

if (empty($namaBaru)) {
    echo "<script> alert ('Nama tidak boleh kosong'); location.href='ubah_user.php';</script>";
} elseif (empty($tanggalBaru)) {
    echo "<script> alert ('Tanggal tidak boleh kosong'); location.href='ubah_user.php';</script>";
} elseif (empty($genderBaru)) {
    echo "<script> alert('Gender tidak boleh kosong'); location.href='ubah_user.php';</script>";
} elseif (empty($alamatBaru)) {
    echo "<script> alert('Alamat tidak boleh kosong'); location.href='ubah_user.php';</script>";
} elseif (empty($usernameBaru)) {
    echo "<script> alert('Username tidak boleh kosong'); location.href='ubah_user.php';</script>";
} elseif (empty($passwordBaru)) {
    echo "<script> alert('Password tidak boleh kosong'); location.href='ubah_user.php';</script>";
} else {
    $update = mysqli_query($conn, "update user set nama_pelanggan ='$namaBaru', tanggal_lahir = '$tanggalBaru', gender = '$genderBaru', alamat = '$alamatBaru', username = '$usernameBaru', pass = '$passwordBaru', level = '$levelBaru' where id_user = '$id_user'");
    if ($update) {
        if ($_SESSION['id_user'] == $id_user) {
            $_SESSION['token_ubah'] = array();
            session_destroy();
            header("location: index.php");
            echo "<script> alert ('Sukses mengubah '" . $id_user . "''); location.href='index.php';</script>";
            exit();
        } else {
            $_SESSION['token_ubah'] = array();
            header("location: tampil_user.php");
            echo "<script> alert ('Sukses mengubah '" . $id_user . "''); location.href='index.php';</script>";
            exit();
        }

    } else {
        echo "<script> alert ('Gagal mengubah'); location.href='index.php';</script>";
    }
}

?>