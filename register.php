<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <form action="php/registerprocess.php" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5"> 
                        <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <hr>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-8 col-md-6">
                                        <input type="text" class="form-control form-control-user" name="fristname"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="col-8 col-md-6">
                                        <input type="text" class="form-control form-control-user" name="lastname"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-16 col-md-12">
                                    <input type="email" class="form-control form-control-user" name="username"
                                        placeholder="Email Address" required>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8 col-md-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="password" id="password" onchange='check_pass();' placeholder="Password" required>
                                    </div>
                                    <div class="col-8 col-md-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="confirm_password" id="confirm_password" onchange='check_pass();' placeholder="Repeat Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-8 col-md-6">
                                        <input type="text" class="form-control form-control-user" name="phone"
                                            placeholder="0646282730" required>
                                    </div>
                                    <div class="col-8 col-md-6">
                                        <input type="text" class="form-control form-control-user" name="idline"
                                            placeholder="ID-Line" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-16 col-md-12">
                                        <input type="text" class="form-control form-control-user"
                                            name="department" placeholder="Department ITsupport" required>
                                    </div>
                                </div>
                                <a class="small fa-pull-right" href="forgot-password.php">Forgot Password?</a>
                                <a class="small fa-pull-left" href="index.php">Already have an account? Login!</a>
                                 <hr>
                                <br>
                                <div class="text-center">
                                    <input type="submit" name= "submit" class="btn btn-primary btn-user btn-block" value="Register" id="submit" disabled>                                 
                                    
                             </div>
                            </form>
                                 
                        </div>
                        <div class="text-center">
                            <span>Copyright &copy; Dew Tadapong Sutthikitrungtoj </span> 
                            </div>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
 function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
        document.getElementById('submit').disabled = false;
    } else {
        if(document.getElementById('confirm_password').value == ""){
        }
        else{
              document.getElementById('submit').disabled = true;
        { alert("โธ่ๆๆ จะสมัครได้ยังไงละต้องใส่รหัสให้ตรงกันดิ!"); } 
        
        }
    }
}
    </script>
    <!-- JavaScript alert box-->
     <!-- <script> function myFunction() { alert("Register Success Please Login!"); } </script>-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>