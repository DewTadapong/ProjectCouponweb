<?php 
include 'connect.php';
    if (isset($_GET['id'])) {
        $sql = "DELETE FROM products WHERE id = '".mysqli_real_escape_string($connect, $_GET['id'])."' ";
        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/deletesuccess.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/deleteunsuccess.php');
        }
    }
    mysqli_close($connect);
?>