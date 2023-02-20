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
                        $show=header( "location:/Couponweb/Home.php");
                        header( "refresh: 0.1; url=/Couponweb/Home.php" );
 
                }else{
                        header( "refresh: 0.1; url=/Couponweb/index.html" );
                        echo '<script>alert("!ยูสเซอร์หรือรหัสผ่านไม่ถูกต้องกรุณาลองใหม่อีกครั้ง!")</script>';

                }
                echo $show
?>