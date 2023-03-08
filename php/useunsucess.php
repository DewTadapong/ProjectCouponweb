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
  position: 'top-end',  
  icon: 'error',
  title: 'ไม่สามารถใช้คูปองได้',
  showConfirmButton: false,
  timer: 1000
})
</script>
<?php
header('Refresh: 1 ; url= /Couponweb/Usecoupon.php');
?>
<script src="sweetalert2.all.min.js"></script>
</body>
</html>