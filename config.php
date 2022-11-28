<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'db_tracking';

    $connect = mysqli_connect($server,$username,$password,$db_name);
    if ( !$connect ) {
        die("<script>alert('Gagal Terhubung ke database.')</script>");
    }
?>