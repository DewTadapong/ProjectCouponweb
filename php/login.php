<!DOCTYPE html>
<html lang="en">
<head> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
</head>
<body></body>
<?php 
include 'connect.php';
session_start();
  
 
                $username = $_POST['username'];
                $password = $_POST['password'];
                 $sql="SELECT * FROM user WHERE username='$username' and password='$password'";

                $result=mysqli_query($connect,$sql);
                $row = mysqli_fetch_array($result);
                if($row > 0){
                        $_SESSION["username"]=$row['username'];
                        $_SESSION["password"]=$row['password'];
                        $_SESSION["fristname"]=$row['fristname'];
                        $_SESSION["lastname"]=$row['lastname'];
                        $_SESSION["department"]=$row['department'];
                        echo "<script>";
                        echo "Swal.fire(
                                'Login Success',
                                'Welcome To Miniproject',
                                'success'
                               )";
                        echo "</script>";                        
                        header( "refresh: 0.90; url=/Couponweb/Home.php" );

                }else{
                        echo "<script>";
                        echo "Swal.fire(
                                'Login Falls',
                                '!ยูสเซอร์หรือรหัสผ่านไม่ถูกต้องกรุณาลองใหม่อีกครั้ง!',
                                'error'
                                )";
                        echo "</script>";          
                        header( "refresh: 1.8; url=/Couponweb/index.html" );
                }
 ?>
</html>