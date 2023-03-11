<?php 
include 'connect.php';
    if (isset($_GET['id'])) {
        $sql = "DELETE FROM products WHERE id = '".mysqli_real_escape_string($connect, $_GET['id'])."' ";
        
        $sqldelete = "SELECT * FROM products WHERE id = '".$_GET['id']."'";
        $resultdelete = mysqli_query($connect, $sqldelete);
        while ($row = mysqli_fetch_assoc($resultdelete)):
            $barcode = $row['barcode'];
            unlink( "outputs/$barcode.jpg" );
            unlink( "$barcode.png" );
        endwhile;
        mysqli_query($connect, $sqldelete);

        if (mysqli_query($connect, $sql)) {
             header('Refresh:0; url= /Couponweb/php/deletesuccessout.php');
        } else {
             header('Refresh:0; url= /Couponweb/php/deleteunsuccessout.php');
        }
    }
    mysqli_close($connect);
?>