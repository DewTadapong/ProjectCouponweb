<!DOCTYPE html>
<html lang="en">
<head> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
</head>
<body></body>
<?php 
include 'connect.php';
session_start();

                // $_POST['remember'];  
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
                       // if(!empty($_POST['remember'])){
                        //        setcookie('$username',$_POST['username'],time() + (10 ));
                        //        setcookie('$password',$_POST['password'],time() + (10 ));
                        //}else{
                        //        if(isset($_COOKIE['username'])){
                        //                setcookie('username','');
                         //       if(isset($_COOKIE['password'])){
                         //               setcookie('password','');
                        //        }       }
                       // }
                        echo "<script>";
                        echo "Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Login Success',
                                text: '!Welcome to Miniproject!',
                                showComfirmButton: false,
                                timer: 1000
                        }).then((result) => {
                                if(result){
                                        window.location = '/Couponweb/Home.php';
                           
                                }
                        })";
                        echo "</script>";          

                }else{
                        echo "<script>";
                        echo "Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: '!-Login Falls-!',
                                text: '!ยูสเซอร์หรือรหัสผ่านไม่ถูกต้องกรุณาลองใหม่อีกครั้ง!',
                                showComfirmButton: false,
                                timer: 1400
                        }).then((result) => {
                                if(result){
                                        window.location.herf = '/Couponweb/index.php';
                                }
                        })";
                        echo "</script>";          
                }
 ?>
</html>