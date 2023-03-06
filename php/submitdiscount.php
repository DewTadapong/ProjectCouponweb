<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $inputmoney = $_POST['inputmoney']; // รับเงิน
    $pricesellall = $_POST['pricesellall'];  // ราคาขาย
    $change = $inputmoney - $pricesellall;
    $change; //เงินทอน
    $id = $_GET['id'];

    $sqlcoupon = "SELECT * FROM products WHERE id='$id'";
    $resultcouponcode = mysqli_query($connect, $sqlcoupon);

    while ($row = mysqli_fetch_assoc($resultcouponcode)):
                                            
       $amountnow = $row['amountnow'];
       "<br>";

    endwhile;
}    
    echo -$amountnow; 
    $sql = "UPDATE products SET 
    amountnow = '".--$amountnow."'
    WHERE id = '".$id."' ";
    if (mysqli_query($connect, $sql)) {
          header('Refresh:0; url= /Couponweb/php/editsucess.php');
   } else {
        header('Refresh:0; url= /Couponweb/php/editunsucess.php');
   }

mysqli_close($connect);
?>