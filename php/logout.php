<?php
Session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION);
    session_destroy();
	header('Location: /Couponweb/index.php');
	die();
}
?>