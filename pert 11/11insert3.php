<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase", 3306);

if (!$con) {  
    die('Could not connect: ' . mysqli_connect_error());  
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES('$firstname', '$lastname', '$age')"; 

if (!mysqli_query($con, $sql)) {  
    die('Error: ' . mysqli_error($con));  
}
echo "1 record added"; 

mysqli_close($con);
?>