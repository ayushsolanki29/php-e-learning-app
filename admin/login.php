<?php include '../php/config.php'; 
session_start();
if (isset($_POST['adminlogin'])){
    $username = $_POST["adminname"];
    $admin_password = $_POST['adminpassword'];
    $admin_check = "SELECT * FROM `admin`";

    $check_result = mysqli_query($con,$admin_check);
    while ($row=mysqli_fetch_array($check_result)) {
        if ($username == $row["username"]){
          if ($admin_password==$row["password"] ){
            $_SESSION['admin_auth'] = 0;
            header("location: index.php");

          }
          else{
            echo "<script>alert('Wrong Password!')</script>";
          }
        }
        else{
          echo "<script>alert('Admin Not Found!')</script>";
        }
      }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-LEARNING | Login</title>
<?php include './pages/header.php'?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>E</b>-Learning</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Panel For admin only</p>
      <form method="post">
        <div class="input-group mb-3">
          <input type="text"  class="form-control" placeholder="Username" name="adminname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"  class="form-control" placeholder="Password" name="adminpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="adminlogin" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>

