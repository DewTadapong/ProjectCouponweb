<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
     $exp = $_POST['exp'];
     $datestart = date("Y-m-d H:i:s");                    
     $calculate =strtotime("$exp")-strtotime("$datestart");
     $summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)

     $sql = "INSERT INTO `products` (`name`, `detail`, `amount`, `created_at`, `updated_at`, `exp`, `day`) 
          VALUES (
                    '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['amount']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."',
                    '".$_POST['exp']."',
                    '".$summary."')";

        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/addsucess.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/addunsucess.php');
         }
    }
    mysqli_close($connect);
?>
