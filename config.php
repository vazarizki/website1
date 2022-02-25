<?php

$server = "localhost";
$user   = "root";
$password   = "";
$database   = "skripsian";

$koneksi = mysqli_connect("$server","$user","$password","$database");
if(!$koneksi){
    die ("<script> alert('gagal terhubung')</script>". mysqli_connect_error);
}
?>
