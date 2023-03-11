<?php
$barcode = $_GET['id'];
unlink( "$barcode.png" );
header('Refresh:0; url= /Couponweb/php/deletesuccess.php');
?>