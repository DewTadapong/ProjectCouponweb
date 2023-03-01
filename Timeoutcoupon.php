<?php
session_start();
if (!isset($_SESSION['username'], $_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php'>" ;
    exit;
}
require_once('php/connect.php');
include 'php/barcode128.php';
if(isset($_SESSION['fristname']))
    $sql = "SELECT * FROM products WHERE day='หมดอายุ'";
    $result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Timeout - Coupon</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- logo headtab wev -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logoheadweb.ico">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script> //session หมด ล้อกเอ้าใน 30 วิ  1000 = 1 วิ
                                        var keyboard_time_out = setTimeout('close_window()', 1800000);
                                        $(window).keypress(function(){
                                        clearTimeout(keboard_time_out);
                                        keyboard_time_out = setTimeout('close_window()', 1800000);
                                        })
                                        function close_window(){
                                        location.href="php/logout.php";
                                        } </script>
                                          <!--css profile-->
   
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Logo sidebar -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon rotate-n-15">
               <!--  <i class="fas fa-laugh-wink"></i> -->
               <img style="width: 2rem;"
               src="img/logo.png" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3"><div class="title page">
                    <h3 style="display: inline;">IT</h3>
                    <h4 style="display: inline;">Care</h4>
                    <sup>LAF</sup>
                </div></div>  
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-plus-square"></i>
                    <span>&nbsp;AddCoupon</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <!--  <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item  " href="Genarate.php">GenarateCoupon</a>
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>UseCoupon</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Usecoupon.php">UseCoupon</a>
                        <a class="collapse-item" href="Usehistory.php">UseHistory</a>
                    </div>
                </div>
            </li>
           
              <!-- Divider -->
            <hr class="sidebar-divider">
             <!-- Heading -->   
            <div class="sidebar-heading">
                 การเคลียคูปองหมดอายุ
            </div>
            <li class="nav-item  active">
                <a class="nav-link" href="Timeoutcoupon.php">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <span>&nbsp;TimeoutCoupon</span></a>
            </li>

         
              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">
     
              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                  <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>
  
        
  
          </ul>
          <!-- End of Sidebar -->
  
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">
   
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">February 17, 2023</div>
                                <span class="font-weight-bold">ทดสอบแจ้งเตื่อนเฉยๆอย่ารีบสิ</span>
                            </div>
                        </a>           
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>


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
                    <a class="dropdown-item" href="php/logout.php" onclick="return confirm('Do you want to sign out?')">                                
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a> 
                    </div>
                </li>

            </ul>

            </nav>
            <!-- End of Topbar -->
                  

            <!-- Begin Page Content -->
                        
<!-- Page Heading -->
    <div class="container-fluid">
            <div class="shadow rounded p-4 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-sm-flex align-items-center justify-content-between mb-2">
                            <h1 class="pb">คูปองที่หมดอายุแล้ว</h1>                                
                        </div>
                            <span class="text-right" >หมดอายุทั้งหมด <?php echo mysqli_num_rows($result) ?> รายการ </span>  
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                     <th>ชื่อคูปอง</th>
                                    <th>รายละเอียด</th>
                                    <th>จำนวน</th>
                                    <th>วันหมดอายุ</th>
                                    <th>BarCode</th>
                                    <th>จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)):?>
                                    <tr class="text-center">
                                         <td> <?php echo $row['name'] ?> </td>
                                        <td style="column-width:250px;white-space: normal; "><div id="hidden-text"><?php echo $row['detail'] ?></div></td>
                                        <td> <?php echo $row['amount'] ?></td>
                                        <td> <?php echo dateThai($row['exp']) ?></td>
                                        <td> <img alt="barcode" src="php/barcode.php?codetype=Code128&size=15&text=<?php echo $row['barcode']?>&
                                                    print=true" /></td>
                                        <td>
                                            <div class="btn-group">
                                                <button name="info"
                                                class="btn btn-primary" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#my-modal<?php echo $row['id'] ?>" 
                                                        style="width: 105px;"> ใช้อีกครั้ง </button>
                                              
                                                 <a href="/Couponweb/php/deletecouponprocess.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"> ลบ </a>
 
                                            </div>
                                        </td>
                                    </tr>
                                     
                                <!-- Modal Profile-->
                                <div class="modal fade" id="id-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                            <div class="modal-body-id">
                                            </div>
                                        </div>
                                </div>
       
                                    <!-- Modal Read-->
                                    <form class="row gy-4" action="php/updateuseagain.php"  method="POST">
                                    <div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">การนำกลับมาใช้</h4>
                                                    <img alt="barcode" class="rounded float-start" src="php/barcode.php?codetype=Code128&size=15&text=<?php echo $row['barcode']?>&
                                                    print=true" />
                                                </div>
                                            <div class="modal-body">
                                                    <?php $id=$row['id'] ?>
                                                    <p>ชื่อคูปอง: <?php echo $row['name'] ?></p>
                                                    <p>รายละเอียด: <?php echo $row['detail'] ?></p>
                                                    <p>จำนวนคูปอง: <?php echo number_format($row['amount'], 0) ?> รายการ</p>
                                                    <p>วันเวลาหมดอายุ: <?php echo dateThai($row['exp']) ?></p>
                                                <div class="container-right" >
                                                    <div class="row">      
                                                        <p>&nbsp;&nbsp;&nbsp;เลือกวันหมดอายุใหม่: </p>
                                                        <div class="col-md-6"> 
                                                            <input type="datetime-local" name="exp" class="form-control" value="<?php echo $row['exp'] ?>" style="color:red;">
                                                            
                                                        </div>
                                                    </div>
                                                </div>     
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">ยืนยันนำไปใช้</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                <?php endwhile; ?>
                                </tbody>
                            </table>    
                            <?php 
                                else: 
                                    echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>"; 
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  
 
            <!-- Footer -->
            <footer class=" container my-auto">
                     <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dew Tadapong Sutthikitrungtoj Website</span>
                    </div>
            </footer>
            <!-- End of Footer -->

     

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 
    <style>
        #hidden-text{
            width:100%;
            width:inherit !important; /* hack firefox , chrome ,safari*/
            overflow:hidden
        }
        .modal-body{
            word-break: break-all;
        }
        .modal-body-id{
        background-image: url('img/picdew.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 400px;
        }
        .dropdown-item{
        cursor: pointer;
        }  
    </style>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 
    <?php mysqli_close($connect) ?>
</body>
</html>