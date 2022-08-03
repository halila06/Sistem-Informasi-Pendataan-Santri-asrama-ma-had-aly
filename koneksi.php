<?php
$koneksi = mysqli_connect("localhost","mahadaly","mahadaly123","admin");

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>