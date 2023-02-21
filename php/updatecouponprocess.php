<?php 
include 'connect.php';
    if (isset($_POST['submit'])) {
        $sql = "UPDATE products SET 
                name = '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."',
                detail = '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                price = '".$_POST['price']."', 
                amount = '".$_POST['amount']."', 
                updated_at = '".date("Y-m-d H:i:s")."'
                WHERE id = '".mysqli_real_escape_string($connect, $_POST['id'])."' ";
        if (mysqli_query($connect, $sql)) {
            echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= /Couponweb/Genarate.php');
        } else {
            echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= /Couponweb/Genarate.php');
        }
    }
    mysqli_close($connect);
?>