<?php
header("content-type: image/jpg");
$file_name='gd-template.jpg';
require 'config-pdo.php';
$sql="SELECT * FROM products where day!='หมดอายุ'";
foreach($dbo->query($sql) as $row ){
 
  //echo "$row[name]<br>";
$x=200; // Horizontal postion to add name
$y=200; // vertical
$img_source=imagecreatefromjpeg($file_name);
/// adding name ///
$text_color=imagecolorallocate($img_source,0,0,0);
$x=40;
$y=300; // vertical
ImageString($img_source,5,$x,$y,"Coupon Discount : ".$row['discount']." %",$text_color);

$x=40;
$y=350; // vertical
ImageString($img_source,5,$x,$y,"Bill more than : ".$row['position']." Bath",$text_color);

$x=40;
$y=400; // vertical
ImageString($img_source,5,$x,$y,"EXP : ".$row['exp'],$text_color);
    
///// add profile picture /// 
$str=imagecreatefrompng("pum.png");
imagecopy($img_source,$str,10, 10 , 0, 0, 135, 50);

$str=imagecreatefrompng("".$row['barcode'].".png");
imagecopy($img_source,$str,600, 370 , 0, 0, 135, 50);
//end ///
////
imagejpeg($img_source,"outputs/$row[barcode].jpg");
imagedestroy($img_source);
}
header('Refresh:0; url= /Couponweb/invoice/copybarcode.php?id='.$row['barcode'].'');
?>
