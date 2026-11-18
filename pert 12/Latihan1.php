<?php
include "koneksi.php";

// Query UPDATE data
$query = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Gagal memperbarui data: " . mysqli_error($connection);
}

mysqli_close($connection);
?>