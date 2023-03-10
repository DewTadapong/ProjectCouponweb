<?php
session_start();
if(isset($_SESSION['fristname']))
require_once('php/connect.php');

if(!isset($_GET['id'])){
    header("location: ./");
    exit();
}
$sql = "SELECT * FROM products WHERE id = '".mysqli_real_escape_string($connect, $_GET['id'])."' ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

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

    <title>Genarate - Coupon</title>

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
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-plus-square"></i>
                    <span>&nbsp;AddCoupon</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <!--  <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item active" href="Genarate.php">GenarateCoupon</a>
                        <a class="collapse-item" href="Allcoupon.php">AllCoupon</a>
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
     
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
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
            <li class="breadcrumb-item active">UpdateCoupon</li>
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
 
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
 
                       
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
                            <a class="dropdown-item" href="#">
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
             
            
                <!-- แก้ไขข้อมูลคูปอง -->
                <div class="flex-container">
                    <div class="container">
                        <div class="shadow rounded p-4 bg-body h-100">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <h1 class="text-center"> กรอกข้อมูลให้ครบถ้วนเพื่อทำการแก้ไข </h1><br>
                                    <form class="row gy-4" action="php/updatecouponprocess.php" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">ชื่อคูปอง</label>
                                            <input type="text" class="form-control" id="name" name="name" maxlength="38" value="<?php echo $row['name'] ?>"required>
                                        </div>
                                        <div class="col-md-12">
                                            <br>
                                            <label for="detail" class="form-label">รายละเอียดคูปอง</label>
                                            <textarea type="text" class="form-control" id="detail" name="detail" rows="5"  maxlength="110"required>
                                            <?php echo $row['detail'] ?></textarea>
                                        </div>
                                        <div class="container">
                                                    <div class="row">    
                                                        <div class="col-md-6">
                                                            <br>
                                                            <?php $amountnow = 50 - $row['amountnow'] ?>
                                                            <label for="amount" class="form-label">เพิ่มจำนวนคูปองจากเดิม</label>
                                                            <input type="number" class="form-control" id="amount" name="amount" min="0" max=<?php echo $amountnow ?>>
                                                            <input type="number" class="form-control" name="amountvariable" value="<?php echo $row['amount'] ?>" style="visibility: hidden;">
                                                            <input type="number" class="form-control" name="amountnowvariable" value="<?php echo $row['amountnow'] ?>" style="visibility: hidden;">
                                                        </div>
                                                         <div class="col-md-6">
                                                        <br>
                                                            <label for="">วันเเละเวลาหมดอายุคูปอง</label>
                                                            <input type="datetime-local" name="exp" class="form-control" value="<?php echo $row['exp'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                     <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                                        <div class="col-md-5"> 
                                                            <label for="exampleInputFile">เปอร์เซ็นที่ลด</label>
                                                                <input type="number" class="form-control" id="discount" name="discount" min="1" max="99" value="<?php echo $row['discount'] ?>"required>
                                                        </div>&nbsp;&nbsp;&nbsp; 
                                                        <div class="col-md-5"> 
                                                            <label for="exampleInputFile">ยอดขั้นต่ำในการใช้</label>
                                                                <input type="number" class="form-control" id="position" name="position" min="1000" value="<?php echo $row['position'] ?>" required>
                                                        </div>                 
                                                    </div>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                        <div class="col-md-5"> 
                                                            <div class="form-group">
                                                                <div class="input-group col-xs-12">
                                                                    <label for="exampleInputFile">ไฟล์แนบรูปพื้นหลังคูปอง</label>
                                                                    <div class="input-group col-xs-4">
                                                                <input type="file" name="file">
                                                                     </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                                        <div class="col-12">
                                            <br>
                                            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                                        </div>
                                    </form>
                                    <a href="/Couponweb/Genarate.php">ย้อนกลับ</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
 
 

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
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
        #hidden-text{
            width:100%;
            width:inherit !important; /* hack firefox , chrome ,safari*/
            overflow:hidden
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>