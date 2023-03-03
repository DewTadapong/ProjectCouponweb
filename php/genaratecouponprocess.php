<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
     $random = substr(md5(mt_rand()), 0, 7);
     $exp = $_POST['exp'];
     $discount = $_POST['discount'];
     $position = $_POST['position'];
     $datestart = date("Y-m-d H:i:s");                    
     $calculate =strtotime("$exp")-strtotime("$datestart");
     $summary=floor($calculate / 86400); // 86400 วินาที / 60 / 60 (1วัน = 24 ชม.)

     $sql = "INSERT INTO `products` (`name`, `detail`, `amount`, `created_at`, `updated_at`, `exp`, `day`, `barcode`, `discount`, `position`) 
          VALUES (
                    '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['amount']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."',
                    '".$_POST['exp']."',
                    '".$summary."',
                    '".$random."',
                    '".$discount."',
                    '".$position."')";

        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/addsucess.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/addunsucess.php');
         }
    }
    mysqli_close($connect);
?>


