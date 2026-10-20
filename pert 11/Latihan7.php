<?php
$link = mysqli_connect("localhost", "root", "", "lat_dbase", 3306);

$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");
$hit = mysqli_num_rows($hasil);
echo "jumlah record $hit";
?>