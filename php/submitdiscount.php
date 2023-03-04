<?php
include 'connect.php';
if (isset($_POST['submit'])) {
$statusdiscount = $_POST['statusdiscount'];
echo $statusdiscount;
}
?>