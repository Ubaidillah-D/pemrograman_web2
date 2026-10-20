<?php
$link = mysqli_connect("localhost", "root", "", "lat_dbase", 3306); 

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE tbl_mhs (
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

$buat_tabel = mysqli_query($link, $sql);

if($buat_tabel) {
    echo "Tabel tbl_mhs berhasil dibuat!<br>";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($link) . "<br>";
}

$input = mysqli_query($link, "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES('Anjar','Prabowo',25)");

if($input) {
    echo "Data Anjar berhasil dimasukkan!";
} else {
    echo "Gagal memasukkan data: " . mysqli_error($link);
}
?>