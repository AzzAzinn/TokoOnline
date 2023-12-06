<?php
include('koneksi.php');

$nama = $_POST['nama_pelanggan'];
$tanggal = $_POST['tanggal_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['pass'];

if(empty($nama)){
    echo "<script> alert ('Nama tidak boleh kosong'); location.href='tambah_user.php';</script>";
} elseif(empty($tanggal)){
    echo "<script> alert ('Tanggal tidak boleh kosong'); location.href='tambah_user.php';</script>";
} elseif(empty($gender)){
    echo "<script> alert('Gender tidak boleh kosong'); location.href='tambah_user.php';</script>";
} elseif(empty($alamat)){
    echo "<script> alert('Alamat tidak boleh kosong'); location.href='tambah_user.php';</script>";
} elseif(empty($username)){
    echo "<script> alert('Username tidak boleh kosong'); location.href='tambah_user.php';</script>";
} elseif(empty($password)){
    echo "<script> alert('Password tidak boleh kosong'); location.href='tambah_user.php';</script>";
} else {
    $insert = mysqli_query($conn, "insert into user(nama_pelanggan, tanggal_lahir, gender, alamat, username, pass, id_user) value
    ('".$nama."', '".$tanggal."', '".$gender."', '".$alamat."', '".$username."', '".$password."', '".$id_user."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script> alert ('Sukses menambahkan'); location.href='login.php';</script>";
        header('login.php');
    } else {
        echo "<script> alert ('Gagal menambahkan'); location.href='tambah_user.php';</script>";
        header('tambah_user.php');
    }
}

?>