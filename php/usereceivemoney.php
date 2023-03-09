<?php
session_start();
include "connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM productsuse WHERE itemnumber_use ='$id'";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)):                                    
    $sid = $row['sid'];
    $receivemoney = $row['receivemoney'];
    
    echo '<input name="receivemoney" id="receivemoney" value="'.$receivemoney.'" style="visibility: hidden;"></input>';                                                                                            
endwhile;
?>
<!DOCTYPE html>
<head>
  <title>
  </title>
   <!-- sweetalert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
</head>
<body>
 <script>
 Swal.fire({
  position: 'center',  
  icon: 'success',
  text: 'เงินทอน',
  title: document.getElementById("receivemoney").value,
   showConfirmButton: true,
  timer: 5000
}).then((result) => {
   if(result){
       window.location.href = '/Couponweb/invoice/print.php?id=<?php echo $sid?>';               
      }})
</script>
<script src="sweetalert2.all.min.js"></script>
</body>
</html>