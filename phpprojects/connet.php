<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "imageupload";
$conn = mysqli_connect($servername,$username,$password,$database);
if ($conn) {
     echo "connetion was successful";
}
else {
    die(mysqli_error($conn));
}

?>