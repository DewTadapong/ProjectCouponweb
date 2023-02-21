<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `products` (`name`, `detail`, `price`, `amount`, `created_at`, `updated_at`) 
            VALUES (
                    '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['price']."', 
                    '".$_POST['amount']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."')";
        
        if (mysqli_query($connect, $sql)) {
            echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= /Couponweb/Genarate.php');
        } else {
            echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
         }
    }
    mysqli_close($connect);
?>