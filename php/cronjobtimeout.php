<?php
 include 'connect.php';
    $sql = "SELECT * FROM products WHERE day!='หมดอายุ'";
    $result = mysqli_query($connect, $sql);
 while ($row = mysqli_fetch_assoc($result)):?>
 <?php
  include 'connect2.php';
  $time = date('Y-m-d H:i:s');
  $timenow = date('Y-m-d H:i:s', strtotime('+0 minutes', strtotime($time)));
  $exp2 = $row['exp'];                     

  $id=$row['id'];
  "<br/>";
  $row['exp'];
  "<br/>";
  $timenow;
  "<br/>";
  "<br/>";
 if($row['exp'] <= $timenow){
   $sql = "UPDATE products SET day='หมดอายุ' WHERE id=$id";
   if (mysqli_query($connect, $sql)) {
      // echo 'update success';
   } else {
      //  echo 'update errror';                                                            
   }
 }
?>   
<?php endwhile; ?>