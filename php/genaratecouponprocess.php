<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
     $exp = $_POST['exp'];
     $sql = "INSERT INTO `products` (`name`, `detail`, `amount`, `created_at`, `updated_at`, `exp`) 
          VALUES (
                    '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['amount']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."',
                    '".$_POST['exp']."')";
        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/addsucess.php');          
        
        } else {
             header('Refresh:0; url= /Couponweb/php/addunsucess.php');
         }
    }
    mysqli_close($connect);
?>