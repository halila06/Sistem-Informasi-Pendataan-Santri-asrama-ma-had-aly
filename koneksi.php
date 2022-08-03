<?php
$koneksi = mysqli_connect("http://localhost/phpmyadmin/index.php?route=/database/structure&db=admin","mahadaly","mahadaly123","admin");

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>