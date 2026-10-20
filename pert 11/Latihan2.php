<?php
$link = mysqli_connect("localhost", "root", "", "", 3306);
$dbname = "lat_dbase";

// Tambahkan IF NOT EXISTS agar MySQL mengecek dulu apakah database sudah ada
$cek = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS $dbname");
if ($cek) {  
    echo "Database $dbname berhasil dibuat";
} else {
    die("Couldn't Create Database: " . mysqli_error($link));
}
?>