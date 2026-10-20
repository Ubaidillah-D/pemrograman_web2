<?php 
$link = mysqli_connect("localhost", "root", "", "lat_dbase", 3306); 

$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs"); 
while ($data = mysqli_fetch_row($hasil)) {   
    echo "$data[0] $data[1] $data[2]<br>"; 
}
?>