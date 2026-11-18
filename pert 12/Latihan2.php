<?php
include "koneksi.php";

// Query DELETE data
$query = "DELETE FROM tbl_mhs WHERE LastName = 'Prabowo'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($connection);
}

mysqli_close($connection);
?>