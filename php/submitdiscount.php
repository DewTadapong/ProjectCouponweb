<?php
include 'connect.php';
session_start();
if (isset($_POST['submit'])) {
    $_SESSION["fristname"];
    $_SESSION['itemnumberuse1'];  // เลขที่รายการ เก็บเเบบ session
    $getmoney = $_POST['inputmoney']; // รับเงิน
    $pricesellall = $_POST['pricesellall'];  // ราคาขาย หักส่วนลด
    $total = $_POST['total'];  // ราคาขายปกติ ไม่มีส่วนลด
    $change = $getmoney - $pricesellall;
    $change; //เงินทอน
    $id = $_GET['id'];
    $status = "yes";

    $sqlcoupon = "SELECT * FROM products WHERE id='$id'";
    $resultcouponcode = mysqli_query($connect, $sqlcoupon);

    while ($row = mysqli_fetch_assoc($resultcouponcode)):
                                            
       $amountnow = $row['amountnow']; // คูปองคงเหลือ
       $name = $row['name'];
       $barcode = $row['barcode'];

       "<br>";

    endwhile;
}    
    $sqlupdate = "UPDATE products SET 
    amountnow = '".--$amountnow."'
    WHERE id = '".$id."' ";
    mysqli_query($connect, $sqlupdate);

    $sqlupdatebill = "UPDATE invoice SET 
    status = '".$status."' 
    WHERE INVOICE_NO = ".$_SESSION['itemnumberuse1']."";
    mysqli_query($connect, $sqlupdatebill);
 
    $sqlinserthistory = "INSERT INTO `productsuse` (`coupon`, `use_at`, `barcode`,`itemnumber_use`, `pricesellall`, `discountbath`, `receivemoney`, `getmoney`, `employee`) 
    VALUES (
              '".htmlspecialchars($name, ENT_QUOTES, 'UTF-8')."', 
              '".date("Y-m-d H:i:s")."', 
              '".$barcode."',
              '".$_SESSION['itemnumberuse1']."',
              '".$total."',
              '".$pricesellall."',
              '".$change."',
              '".$getmoney."',
              '".$_SESSION["fristname"]."')";  

  if (mysqli_query($connect, $sqlinserthistory)){
         header('Refresh:0; url= /Couponweb/php/usesucess.php');
  }
  else{
         header('Refresh:0; url= /Couponweb/php/useunsucess.php');
  }
mysqli_close($connect);
?>