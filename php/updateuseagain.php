<?php 
include 'connect.php';
    if (isset($_POST['submit'])) {
        $exp = $_POST['exp'];
        $day = "10";
        $sql = "UPDATE products SET 
                updated_at = '".date("Y-m-d H:i:s")."',
                exp =  '".$_POST['exp']."',
                day =  '".$day."'
                WHERE id = '".mysqli_real_escape_string($connect, $_GET['id'])."' ";
        if (mysqli_query($connect, $sql)) {
              header('Refresh:0; url= /Couponweb/php/editsucess.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/editunsucess.php');
        }
    }
    mysqli_close($connect);
?>