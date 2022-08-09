<?php 
 
 include 'koneksi.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: cek_login.php");
 }
  
 if (isset($_POST['submit'])) {
     $username= $_POST['mahadaly'];
     $password = md5($_POST['mahadaly123']);
  
     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $row['username'];
         header("Location: cek_login.php");
     } else {
         echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
     }
 }
?>