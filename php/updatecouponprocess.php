<?php 
     $dir = "upload/";
     $fileimage = $dir .basename($_FILES['file']['name']);
     if(move_uploaded_file($_FILES['file']['tmp_name'],$fileimage)){
          echo "ไฟล์ภาพ" .basename($_FILES['file']['name']). "อัพโหลดเสร็จสิ้น";
     }else{
          echo "Error";
     }
include 'connect.php';
    if (isset($_POST['submit'])) {
        $sql = "UPDATE products SET 
                name = '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."',
                detail = '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                image = '".$fileimage."', 
                amount = '".$_POST['amount']."', 
                updated_at = '".date("Y-m-d H:i:s")."'
                WHERE id = '".mysqli_real_escape_string($connect, $_POST['id'])."' ";
        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/editsucess.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/editunsucess.php');
        }
    }
    mysqli_close($connect);
?>