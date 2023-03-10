<?php 
session_start();
require "invoice/config.php"; 
if (!isset($_SESSION['username'], $_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php'>" ;
    exit;
}
if(isset($_SESSION['fristname']))
//image user
$sqlimguser = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
$resultimguser = mysqli_query($con, $sqlimguser);

 // เเจ้งเตือน หมดอายุ ใน 24 ชม.
 $sqlalert = "SELECT * FROM products WHERE hralert = 1 ";
 $resultalert = mysqli_query($con, $sqlalert);
 $sqlnumalert = "SELECT SUM(hralert) AS count FROM products";
 $durationnumalert = $con->query($sqlnumalert);
 $recordnumalert = $durationnumalert->fetch_array();
 $totalnumalert = $recordnumalert['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Test - Bill</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
		<script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

	 <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- logo headtab wev -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logoheadweb.ico">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- table -->
     <link  rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
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
	<body>
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
    <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-plus-square"></i>
        <span>&nbsp;AddCoupon</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
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
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>UseCoupon</span>
    </a>
    <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Usecoupon.php">UseCoupon</a>
            <a class="collapse-item " href="Usehistory.php">UseHistory</a>
            <a class="collapse-item active" href="Usetestbill.php">TestBill</a>
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
              <li class="breadcrumb-item active">Test-Bill</li>
             </ol>
<script>
function hidebtn() {
if(document.getElementById("seachtop").style.visibility == 'hidden'){
document.getElementById("seachtop").style="visibility: visible;"}else{
  document.getElementById("seachtop").style="visibility: hidden;"
}
}

</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
   
<!-- Topbar Search -->
<form action="php/seachbilltest.php" method="POST" id="seachtop" style="visibility: hidden;">
    <div class="input-group">
        <input type="text" name="seachbilltest" class="form-control bg-light border-0 small" placeholder="Search for ..."
        aria-label="Search" aria-describedby="basic-addon2" style="width: 300px;"> 
         
    </div>
</form>&nbsp;&nbsp; 
<button type="submit" class="btn btn-navbar" onclick=" hidebtn()">
        <i class="fas fa-search"></i>
</button>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

 <!-- Nav Item - Alerts -->
 <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- ใกล้หมดอยุ่ใน 24 ชม -->
                  <?php if (mysqli_num_rows($resultalert) >= 1): ?>

                  <span class="badge badge-danger badge-counter"><?php echo $totalnumalert?>+</span>
                  <?php else:?>

                  <?php endif?>
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
 
    <div class="container-fluid">
            <div class="shadow rounded p-4 bg-body h-100">
			<h1 class='text-center text-primary'>Create Invoice</h1><hr>
			<?php
				if(isset($_POST["submit"])){
					$invoice_no=$_POST["invoice_no"];
					$invoice_date=date("Y-m-d",strtotime($_POST["invoice_date"]));
					$cname=mysqli_real_escape_string($con,$_POST["cname"]);
					$caddress=mysqli_real_escape_string($con,$_POST["caddress"]);
					$ccity=mysqli_real_escape_string($con,$_POST["ccity"]);
					$grand_total=mysqli_real_escape_string($con,$_POST["grand_total"]);
					$status = "no";
					$sql="insert into invoice (INVOICE_NO,INVOICE_DATE,CNAME,CADDRESS,CCITY,GRAND_TOTAL,status) values ('{$invoice_no}','{$invoice_date}','{$cname}','{$caddress}','{$ccity}','{$grand_total}','{$status}') ";
					if($con->query($sql)){
						$sid=$con->insert_id;
						
						$sql2="insert into invoice_products (SID,PNAME,PRICE,QTY,TOTAL) values ";
						$rows=[];
						for($i=0;$i<count($_POST["pname"]);$i++)
						{
							$pname=mysqli_real_escape_string($con,$_POST["pname"][$i]);
							$price=mysqli_real_escape_string($con,$_POST["price"][$i]);
							$qty=mysqli_real_escape_string($con,$_POST["qty"][$i]);
							$total=mysqli_real_escape_string($con,$_POST["total"][$i]);
							$rows[]="('{$sid}','{$pname}','{$price}','{$qty}','{$total}')";
						}
						$sql2.=implode(",",$rows);
						if($con->query($sql2)){
							echo "<div class='alert alert-success'>Invoice Added. <a href='invoice/print.php?id={$sid}' target='_BLANK'>Click</a> here to Print Invoice</div>";
						}else{
							echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
						}
					}else{
						echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
					}
				}
				
			?>
			<form method='post' action='Usetestbill.php' autocomplete='off'>
				<div class='row'>
					<div class='col-md-4'>
						<h5 class='text-success'>Invoice Details</h5>
						<div class='form-group'>
							<label>Invoice No</label>
							<input type='text' name='invoice_no' required class='form-control'>
						</div>
						<div class='form-group'>
							<label>Invoice Date</label>
							<input type='text' name='invoice_date' id='date' required class='form-control'>
						</div>
					</div>
					<div class='col-md-8'>
						<h5 class='text-success'>Customer Details</h5>
						<div class='form-group'>
							<label>NicName</label>
							<input type='text' name='cname' required class='form-control'>
						</div>
						<div class='form-group'>
							<label>Name</label>
							<input type='text' name='caddress' required class='form-control'>
						</div>
						<div class='form-group'>
							<label>Phone</label>
							<input type='text' name='ccity' required class='form-control'>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-12'>
						<h5 class='text-success'>Product Details</h5>
						<table class='table table-bordered'>
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id='product_tbody'>
								<tr>
									<td><input type='text' required name='pname[]' class='form-control'></td>
									<td><input type='text' required name='price[]' class='form-control price'></td>
									<td><input type='text' required name='qty[]' class='form-control qty'></td>
									<td><input type='text' required name='total[]' class='form-control total'></td>
									<td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td><input type='button' value='+ Add Row' class='btn btn-primary btn-sm' id='btn-add-row'></td>
									<td colspan='2' class='text-right'>Total</td>
									<td><input type='text' name='grand_total' id='grand_total' class='form-control' required></td>
								</tr>
							</tfoot>
						</table>
						<input type='submit' name='submit' value='Save Invoice' class='btn btn-success float-right'>
					</div>
				</div>
			</form>
		</div>
		<script>
			$(document).ready(function(){
				$("#date").datepicker({
					dateFormat:"dd-mm-yy"
				});
				
				$("#btn-add-row").click(function(){
					var row="<tr> <td><input type='text' required name='pname[]' class='form-control'></td> <td><input type='text' required name='price[]' class='form-control price'></td> <td><input type='text' required name='qty[]' class='form-control qty'></td> <td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td> </tr>";
					$("#product_tbody").append(row);
				});
				
				$("body").on("click",".btn-row-remove",function(){
					if(confirm("Are You Sure?")){
						$(this).closest("tr").remove();
						grand_total();
					}
				});

				$("body").on("keyup",".price",function(){
					var price=Number($(this).val());
					var qty=Number($(this).closest("tr").find(".qty").val());
					$(this).closest("tr").find(".total").val(price*qty);
					grand_total();
				});
				
				$("body").on("keyup",".qty",function(){
					var qty=Number($(this).val());
					var price=Number($(this).closest("tr").find(".price").val());
					$(this).closest("tr").find(".total").val(price*qty);
					grand_total();
				});			
				
				function grand_total(){
					var tot=0;
					$(".total").each(function(){
						tot+=Number($(this).val());
					});
					$("#grand_total").val(tot);
				}
			});
		</script>
            </div>
        <!-- End of Content Wrapper -->
        </div>
    <!-- End of Page Wrapper -->
        </div>
    </div>
</div>
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
</body>
</html>