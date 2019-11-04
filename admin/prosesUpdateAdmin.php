<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dts";

// Create connection

$nik = $_GET['nik'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE tb_user SET level='admin' WHERE nik='$nik'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>