<?php
echo $id = $_GET['id'];
  $data = file_get_contents('http://127.0.0.1:8080/Couponweb/php/barcode.php?codetype=Code128&size=15&text='.$id.'&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20print=true');
  $img = imagecreatefromstring($data);
  imagepng($img, "$id.png");
  header('Refresh:0; url= /Couponweb/php/addsucess.php');
?>