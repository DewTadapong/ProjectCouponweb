<?php
session_start();
if (!isset($_SESSION['username'], $_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
}
require_once('php/connect.php');
if (isset($_SESSION['fristname']))

 // เเจ้งเตือน หมดอายุ ใน 24 ชม.
 $sqlalert = "SELECT * FROM products WHERE hralert = 1 ";
 $resultalert = mysqli_query($connect, $sqlalert);
 $sqlnumalert = "SELECT SUM(hralert) AS count FROM products";
 $durationnumalert = $connect->query($sqlnumalert);
 $recordnumalert = $durationnumalert->fetch_array();
 $totalnumalert = $recordnumalert['count'];
     //image user
     $sqlimguser = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
     $resultimguser = mysqli_query($connect, $sqlimguser);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Use - Coupon</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- logo headtab wev -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logoheadweb.ico">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //session หมด ล้อกเอ้าใน 30 วิ  1000 = 1 วิ
        var keyboard_time_out = setTimeout('close_window()', 1800000);
        $(window).keypress(function() {
            clearTimeout(keboard_time_out);
            keyboard_time_out = setTimeout('close_window()', 1800000);
        })

        function close_window() {
            location.href = "php/logout.php";
        }
    </script>

    <script>
        function myFunction() {
         $seach = document.getElementById("itemnumber").value;   
         }                                                 
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #343a40;">

            <!-- Logo sidebar -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!--  <i class="fas fa-laugh-wink"></i> -->
                    <img style="width: 2rem;" src="img/logo.png" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3">
                    <div class="title page">
                        <h3 style="display: inline;">IT</h3>
                        <h4 style="display: inline;">Care</h4>
                        <sup>LAF</sup>
                    </div>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="Home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                กระบวนการสร้างคูปอง
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-plus-square"></i>
                    <span>&nbsp;AddCoupon</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--  <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="Genarate.php">GenarateCoupon</a>
                        <a class="collapse-item" href="Allcoupon.php">Preview</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ใช้งานคูปอง
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>UseCoupon</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="Usecoupon.php">UseCoupon</a>
                        <a class="collapse-item" href="Usehistory.php">UseHistory</a>
                        <a class="collapse-item" href="Usetestbill.php">TestBill</a>
                    </div>
                </div>
            </li>

              <!-- Divider -->
              <hr class="sidebar-divider">
             <!-- Heading -->   
            <div class="sidebar-heading">
                 การเคลียคูปองหมดอายุ
            </div>
            <li class="nav-item">
                <a class="nav-link" href="Timeoutcoupon.php">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <span>&nbsp;TimeoutCoupon</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
  
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top" style="height:3.5rem;">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="border-0 fas fa-bars" id="sidebarToggle" style="background-color: white;color:gray;"></button>
</div>

&nbsp;&nbsp;&nbsp;
<ol class="breadcrumb float-rm-right" style="width:300px;">
  <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
  <li class="breadcrumb-item active">UseCoupon</li>
</ol>
<script>
    function hidebtn() {
    if(document.getElementById("seachtop").style.visibility == 'hidden'){
        document.getElementById("seachtop").style="visibility: visible;"}else{
            document.getElementById("seachtop").style="visibility: hidden;"
        }
    }
    
 </script>

<!-- Topbar Search -->
 <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" id="seachtop" style="visibility: hidden;">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for ..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            
        </div>  
    </div>
</form>
&nbsp;&nbsp;&nbsp;    
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
<button class="btn btn-navbar" onclick="hidebtn()">
      <i class="fas fa-search"></i>
</button>
<ul class="navbar-nav ml-auto">

   <!-- Nav Item - Alerts -->
   <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- ใกล้หมดอยุ่ใน 24 ชม -->
                                <?php if (mysqli_num_rows($resultalert) >= 1): ?>

                                <span class="badge badge-danger badge-counter"><?php echo $totalnumalert?>+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    แจ้งเตื่อนคูปองหมดอายุภายใน 24 ชั่วโมง 
                                </h6>
                                <?php while ($row = mysqli_fetch_assoc($resultalert)):?>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle">
                                            <img style="width: 2rem;"
                                                src="img/couponalert.png" alt="...">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-1000"><?php echo date("Y-m-d H:i:s")?> หมดอายุในอีก <?php echo $row['day'];?> ชม.</div>
                                        <span class="font-weight-thin"><?php echo $row['name'];?></span>
                                    </div>
                                 
                                </a>
                                <?php endwhile?>           
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <?php else:?>

                        <?php endif?>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                echo $_SESSION["username"]
                                ?>    
                                </span>
                                <i class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                echo $_SESSION["department"]
                                ?>    
                                </i>  

                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" 
                                                        class="btn btn-primary" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#id-modal" 
                                                         >
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                               Profile 
                            </a>
                            <a class="dropdown-item" href="#" >
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a> 
                            <a class="dropdown-item" href="index.php" onclick="return confirm('Do you want to sign out?')">                                
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a> 
                            </div>
                         </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
             
            
                <!-- ใช้งานคูปอง -->
                <div class="flex-container">
                    <div class="container">
                        <div class="shadow rounded p-4 bg-body h-100">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h1 class="text-start" style="display: inline;"> การใช้งานคูปอง </h1>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <h5 style="display: inline;"> <?php echo dateThai(date("Y-m-d H:i:s")) ?> </h5>
                                    <form action="Usecouponseach.php" method="POST">
                                        <div class="row justify-content-end">                    
                                            <div class="col-1.5 col-sm-1.5"><br>
                                            <h5 id="demo">เลขที่รายการ</h5> 
                                            </div>
                                            <div class="col-5 col-sm-3"><br>                              
                                                <input type="text" class="form-control" id="itemnumber" name="itemnumber" maxlength="15" placeholder="เลขที่รายการ"  value="" required>
                                            </div>
 
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="col-1.5 col-sm-1.5"><br>
                                                <h5>คูปองโค้ด</h5> 
                                            </div>
                                            <div class="col-5 col-sm-3"><br>                                 
                                                <input type="text" class="form-control" name="couponcode" id="couponcode" maxlength="10" placeholder="ชื่อคูปอง" value="" required>
                                            </div>                                             
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
                                        </div><br>
                                        <p class="text-start" id="namecoupon">คูปองนี้</p> 
                                    </form>
                                    <p class="text-start" >เลขที่รายการ</p>
                                    <table class="table table-bordered">
                                        <tr class="text-center text-dark bg-light">
                                            <th><h5>รายการ</h5></th>
                                            <th><h5>ราคาต่อหน่วย</h5></th>
                                            <th><h5>จำนวน</h5></th>
                                            <th><h5>ราคารวม</h5></th>
                                        </tr>
                                             
                                    </table> 
 
                                     
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
 
 

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<!-- Modal Profile-->
<div class="modal fade" id="id-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <?php while ($row = mysqli_fetch_assoc($resultimguser)):?>
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-body-id" style="background-image: url('img/<?php echo $row["imageuser"];?>')">
                                        </div>
                                    </div>
                                    <?php endwhile?>
                                </div>
    <style>
    .container {
    max-width: 100%;
    max-height: 100%;
    height: 700px;
    position: relative;
    margin: auto;
    }
    .modal-body{
            word-break: break-all;
        }
        .modal-body-id{
         background-repeat: no-repeat;
        background-size: cover;
        height: 400px;
        }
        .dropdown-item{
        cursor: pointer;
        }
        .breadcrumb{
            margin-bottom: 0px;
            background-color: white;
        }      
    </style>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>