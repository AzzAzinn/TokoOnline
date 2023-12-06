<?php
session_start();
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from user where id_user='".$_GET['id_user']."'");
        if($qry_hapus){
            if($_SESSION['id_user'] == $_GET['id_user']){
                session_destroy();
                echo "<script>alert('Sukses menghapus user');location.href='tampil_user.php';</script>";
                exit();
            }    
        } else {
            echo "<script>alert('Gagal menghapus user');location.href='tampil_user.php';</script>";
        }
    }

?>