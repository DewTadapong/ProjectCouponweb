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
  title: 'ไม่สามารถสร้างคูปองได้',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php
header('Refresh: 1.5; url= /Couponweb/Genarate.php');
?>
<script src="sweetalert2.all.min.js"></script>
</body>
</html>