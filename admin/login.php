<?php 
session_start();
require('../connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["txtuser"];
   $password = $_POST["txtpass"];

   // Truy vấn cơ sở dữ liệu để kiểm tra tên người dùng và mật khẩu
   $sql = "SELECT * FROM admin WHERE Username = '$username' and Password = '$password'";
   $result = $con->query($sql);

   if ($result->num_rows==1) {

		$row = $result->fetch_assoc();
		$_SESSION["adname"] = $row["Username"];
      // $_SESSION["uid"] = $row["uid"];
		$_SESSION["login_error"] = "";
		$_SESSION["login_ad"]=TRUE;
		header("Location: admin.php");
	} else {
		$_SESSION["login_error"]="Username or Password incorrect! Please try again!";
		$_SESSION["login_ad"] = FALSE;
		header("Location: login.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Log in (v2)</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
   <?php if(isset($_SESSION["login_error"])){ ?>
   <center style="color: red;"><?=$_SESSION["login_error"]?></center>
   <?php } ?>
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a class="h1"><b>Admin</b> Login</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="" method="post">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Tên đăng nhập" name="txtuser" required>
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Mật Khẩu" name="txtpass" required>
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-8">
                     
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
               </div>
            </form>


            <!-- /.social-auth-links -->



         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="./plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>