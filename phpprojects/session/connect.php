<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "making";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    //echo "your connection was sucessfully";
    die (mysqli_error($conn));
}
?>