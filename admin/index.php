<?php include '../php/config.php';
   session_start();
   if (!isset($_SESSION['admin_auth'])) {
    header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>E Learning | Dashboard</title>
  <?php include 'pages/header.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../assets/images/logo.svg" alt="AdminLTELogo" height="100" width="100">
    </div>

    <?php include 'pages/navbar.php' ?>


    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                Overall Analytics
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div>
          </div>
        </div>
      </div>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php
                  $select_views = "SELECT `data1` FROM `settings` WHERE id=1";
                  $run_select_view = mysqli_query($con, $select_views);

                  while ($row = mysqli_fetch_assoc($run_select_view)) {
                    $views = $row['data1'];
                  }

                  ?>
                  <h3>
                    <?= $views ?>
                  </h3>

                  <p>Total Views</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <?php
                  $result = mysqli_query($con, "SELECT COUNT(*) AS user_count FROM `users`");
                  $row = mysqli_fetch_assoc($result);
                  ?>
                  <h3><?= $row['user_count'] ?></h3>
                  <p>Total Users</p>
                </div>

                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                  $result2 = mysqli_query($con, "SELECT COUNT(*) AS cource_count FROM `courses`");
                  $cource_count = mysqli_fetch_assoc($result2);
                  ?>
                  <h3><?= $cource_count['cource_count'] ?></h3>
                  <p>Total Cources</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <?php
                  $result3 = mysqli_query($con, "SELECT COUNT(*) AS material_count FROM `materials`");
                  $material_count = mysqli_fetch_assoc($result3);
                  ?>
                  <h3><?= $material_count['material_count'] ?></h3>
                  <p>Total Materials</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
          </div>
      </section>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                Data Analytics
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box" style="background: #8E44AD ;color:white">
                <div class="inner">
                  <?php
                  $result3 = mysqli_query($con, "SELECT COUNT(*) AS lessons_count FROM `lessons`");
                  $lessons_count = mysqli_fetch_assoc($result3);
                  ?>
                  <h3><?= $lessons_count['lessons_count'] ?></h3>
                  <p>Total Lessions</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background: #40E0D0 ;color:white">
                <div class="inner">
                  <?php
                  $result4 = mysqli_query($con, "SELECT COUNT(*) AS questions_count FROM `questions`");
                  $questions_count = mysqli_fetch_assoc($result4);
                  ?>
                  <h3><?= $questions_count['questions_count'] ?></h3>
                  <p>Total Quiez Questions </p>
                </div>

                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box " style="background: #6495ED ;color:white">
                <div class="inner">
                <?php
                  $result4 = mysqli_query($con, "SELECT SUM(`amount`) AS total_sales FROM `payments`");
                  $total_sales = mysqli_fetch_assoc($result4);
                  ?>
                  <h3><?=  '₹'.$total_sales['total_sales'] .'.00' ?></h3>
                  <p>Total Revanue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box " style="background: #FFBF00 ;color:white">
                <div class="inner">
                <?php
                  $result5 = mysqli_query($con, "SELECT COUNT(*) AS payments_count FROM `payments`");
                  $payments_count = mysqli_fetch_assoc($result5);
                  ?>
                  <h3><?=$payments_count['payments_count'] ?></h3>
                  <p>Total Materials Sale</p>


                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
          </div>
      </section>

    </div>
    <?php include 'pages/footer.php' ?>

</body>

</html>