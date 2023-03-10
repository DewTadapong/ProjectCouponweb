<?php
session_start();
include "connect.php";
(isset($_POST['submit']));
$invoicebill = $_POST['seachbilltest'];

$sql = "SELECT * FROM invoice WHERE INVOICE_NO ='$invoicebill'";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)):                                    
    $sid = $row['SID'];
endwhile;
    header('Refresh:0; url= /Couponweb/invoice/print.php?id='.$sid.'');
?>