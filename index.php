<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- logo headtab wev -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logoheadweb.ico">
</head>

<body class="bg-gradient-primary">
    <form action="php/login.php" method="post">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-">
                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            
                                <div class="p-5">
                                    <div class="text-center">
                                        <img  src="img/logologin.png" class="rounded" alt="...">
                                    </div>
                                    <hr>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="username" aria-describedby="emailHelp"
                                                placeholder="Exsample @ laf.co.th" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="id_password" placeholder="Password" required>
                                               <div class="togglepass"><i class="far fa-eye" id="togglePassword" onclick="hidepassword()"></i></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                             
                                        </div>
                                        <a href="register.php" class="btn btn-primary btn-xs pull-left">
                                            &nbsp; Register&nbsp;
                                        </a>
                                         <input type="submit" name="submit" class="btn btn-primary btn-xs fa-pull-right" value=" &nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;">
                                           
                                         <p> 
                                        <div class="text-left">
                                            <a class="small" href="forgot-password.php">Forgot-Password!</a><br>
                                        </div> </p>
                                    </form>
                                    <hr>
                                    
 
                                    <div class="text-center">
                                        <span>Copyright &copy; Dew Tadapong Sutthikitrungtoj </span> 
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
     <div class="footer">
        <img src="http://www.morino-group.com/laf/img/icon_anydek.png" width="3%" align="center">
        <a href="https://morino-group.com//laf/apps/manual/manual/20200408131828.pdf">คู่มือ Anydesk</a>&nbsp;&nbsp;&nbsp;
        <img src="http://www.morino-group.com/laf/img/ms-team-logo.png" width="3.5%" align="center">
        <a href="https://morino-group.com/laf/apps/manual/manual/20200325191737.pdf">คู่มือ MS-Team for PC |&nbsp;</a><a href="https://morino-group.com/laf/apps/manual/manual/20200408132213.pdf">คู่มือ MS-Team for Smartphone</a>&nbsp;&nbsp;&nbsp;
        <img src="http://www.morino-group.com/laf/img/forti.png" width="2.5%" align="center">
        <a href="https://morino-group.com/laf/apps/manual/manual/20200325191800.pdf">คู่มือ MS-Team for Forticlient VPN</a>&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="https://lin.ee/oMQGofJ"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" width="7%" align="center"></a>&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="https://morino-group.com/laf/apps/manual/manual/zoompdf2.apk">Zoom</a>&nbsp;&nbsp;&nbsp;
        <img src="http://www.morino-group.com/laf/img/newicon1.jpg" width="3%" align="center">
       <a target="_blank" href="https://morino-group.com/laf/food"><b><font color="red">ตรวจสอบยอดเงิน FOOD </font></b></a>
         <img src="http://www.morino-group.com/laf/img/newicon1.jpg" width="3%" align="center">
      </div>
      <style>
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: Snow;
        color: white;
        text-align: center;
        }
       .togglepass{
        position: absolute;
        right: 65px;
        top: 257px;
        cursor: pointer;
       }
        </style>

       <!-- <style>
        .fixed-image {
              position: fixed;
              bottom: 0;
              right: 0;
            }
       
        </style>
        
         <div class="fixed-image">
          <img src="img/footer.PNG" alt="Image" class="img-thumbnail">
        </div>   -->
    <!-- function hide show password -->
    <script>
    function hidepassword(){
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');
    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    });}
    </script>

    <!--  Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>