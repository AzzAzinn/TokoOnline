<?php
    include "koneksi.php";
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['pass'];

        $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and pass = '".$password."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_user'] = $dt_login['id_user'];
            $_SESSION['nama_pelanggan'] = $dt_login['nama_pelanggan'];
            $_SESSION['username'] = $dt_login['username'];
            $_SESSION['status_login'] = true;
            $_SESSION['level'] = $dt_login['level'];
            header("location: index.php");
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
?>