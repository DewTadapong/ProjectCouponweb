<!--include ตัวไฟล์ connect-->
<?php
include 'connect.php';
 
  // ชื่อตัวแปร  ส่งค่าแบบ post 
  $fristname = $_POST['fristname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $department = $_POST['department'];
  $phone = $_POST['phone'];
  $idline = $_POST['idline'];

  // เพิ่มค่าในตาราง test ชื่อ คอลัม name กับ last ตามที่ตั้งใน database
 $sql = "INSERT INTO user (fristname,lastname,username,password,department,phone,idline,status)
      VALUES('$fristname','$lastname','$username','$password','$department','$phone','$idline','User') ";
      $result = mysqli_query($connect,$sql);
           if($result){
                echo '<script>alert("Register Success Please Login!")</script>'; 
                echo '<script type="text/javascript">
                window.location = "/Couponweb/index.html"
                </script>';      
           }else{
                echo '<script>alert("!!!Error Add Member!!!")</script>'; 
                echo '<script type="text/javascript">
                window.location = "/Couponweb/register.html"
                </script>';  
      }
        mysqli_close($connect);

?>
 