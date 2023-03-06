<?php
include 'connect.php';
if (isset($_POST['submit'])) {
$inputmoney = $_POST['inputmoney']; // รับเงิน
$pricesellall = $_POST['pricesellall'];  // ราคาขาย
$change = $inputmoney - $pricesellall;
echo $change;
}
?>