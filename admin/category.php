<?php
include '../php/config.php';

if (isset($_POST['add_category'])) {

  $category = $_POST['category'];

  $run_add_c = mysqli_query($con, "INSERT INTO `category`(`category`) VALUES ('$category')");

  if ($run_add_c) {
    echo "<script>alert('added success')</script>";
    echo "<script>window.location.href = 'category.php'</script>";
  } else {
    echo "<script>alert('Faild')</script>";
    echo "<script>window.location.href = 'category.php'</script>";
  }
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
      <img class="animation__shake" src="../assets/favicon/safari-pinned-tab.svg" alt="AdminLTELogo" height="60"
        width="60">
    </div>

    <?php include 'pages/navbar.php' ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                Add a New Categoty
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <form method="post">
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input type="text" required class="form-control" name="category" id="" aria-describedby="helpId"
              placeholder="Enter title" />
          </div>

          <button type="submit" name="add_category" id="" class="btn btn-primary mb-3">
            Save Category
          </button>
        </form>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">category</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $run_category = mysqli_query($con, "SELECT * FROM `category` where 1");
              while ($row_category = mysqli_fetch_array($run_category)) {

                ?>
                <tr class="">
                  <td scope="row">
                    <?= $row_category['id'] ?>
                  </td>
                  <td>
                    <?= $row_category['category'] ?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger"> Delete </button>
                    <button type="button" class="btn btn-primary"> Edit </button>

                  </td>

                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <?php include 'pages/footer.php' ?>

</body>

</html>