<?php 
     $dir = "upload/";
     $fileimage = $dir .basename($_FILES['file']['name']);
     if(move_uploaded_file($_FILES['file']['tmp_name'],$fileimage)){
         // echo "ไฟล์ภาพ" .basename($_FILES['file']['name']). "อัพโหลดเสร็จสิ้น";
     }else{
         // echo "Error";
         $fileimage = "upload/coupon1.png";
     }
include 'connect.php';
    if (isset($_POST['submit'])) {
     $exp = $_POST['exp'];
     $discount = $_POST['discount'];
     $position = $_POST['position'];
     $amount = $_POST['amount']; // จำนวนที่ต้องการเพิ่ม
     $amountvariable = $_POST['amountvariable']; // จำนวนทั้งหมด เก่า
     $amountnowvariable = $_POST['amountnowvariable']; // จำนวนคงเหลือ เก่า
     $amountvariable_sum = $amountvariable + $amount;   // จำนวนทั้งหมดใหม่
     $amountnowvariable_sum = $amountnowvariable + $amount; // จำนวนคงเหลือใหม่

        $sql = "UPDATE products SET 
                name = '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."',
                detail = '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."',
                amount = '".$amountvariable_sum."', 
                image = '".$fileimage."', 
                updated_at = '".date("Y-m-d H:i:s")."',
                exp = '".$exp."',
                discount = '".$discount."',
                position = '".$position."',
                amountnow = '".$amountnowvariable_sum."'
                WHERE id = '".mysqli_real_escape_string($connect, $_POST['id'])."' ";
        if (mysqli_query($connect, $sql)) {
              header('Refresh:0; url= /Couponweb/php/editsucess.php');
        } else {
              header('Refresh:0; url= /Couponweb/php/editunsucess.php');
        }
    }
    mysqli_close($connect);
?>