<?php
$servername = 'localhost'; 
$dbusername = 'root';
$dbpassword = '';
$port = 3306;

// Menambahkan port 3306 sebagai parameter ke-5 (parameter ke-4 adalah nama database, dikosongkan karena belum dipilih)
$link = mysqli_connect($servername, $dbusername, $dbpassword, "", $port);

if (!$link) {
    die("Not able to connect to server: " . mysqli_connect_error());
}
echo "ok....koneksi berhasil";
?>