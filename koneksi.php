<?php
$server     = "localhost";
$username   = "root";
$password   = "fandiahmad1014";
$db_name    = "dbs_ksi";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi) {
    echo "Gagal Terkoneksi";
} else {
    // echo "Berhasil Terkoneksi";
}

?>