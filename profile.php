<?php
include 'php/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--- primary meta tag-->
  <title>E Learning - The Best Program to Enroll for Exchange</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange" />
  <meta name="description" content="This is an education html template made by codewithsadee" />
  <?php include 'pages/header.php' ?>
  <style>
    html {
      font-size: 62.5%;
    }

    .user-profile {
      margin-top: 100px;
    }

    .user-profile .pinfo {
      background-color: white;
      border-radius: 0.5rem;
      padding: 2rem;
    }

    .user-profile .pinfo .puser {
      text-align: center;
      margin-bottom: 2rem;
      padding: 1rem;
    }

    .user-profile .pinfo .puser .pimg {
      height: 10rem;
      width: 10rem;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    img {
      display: inline-block;
    }

    .pbtn {
      background-color: hsl(170, 75%, 41%);
      color: white;
      display: inline-block;
      border-radius: 0.5rem;
      font-size: 1.8rem;
      cursor: pointer;
      text-transform: capitalize;
      padding: 1rem 3rem;
      text-align: center;
      margin-top: 1rem;
    }

    .user-profile .pinfo .puser h3 {
      font-size: 2rem;
      color: black;
    }

    .user-profile .pinfo .puser p {
      font-size: 1.7rem;
      padding: 0.3rem 0;
    }

    .user-profile .pinfo .pbox-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .user-profile .pinfo .pbox-container .pbox {
      background-color: #eee;
      border-radius: 0.5rem;
      padding: 2rem;
      flex: 1 1 25rem;
    }

    .user-profile .pinfo .pbox-container .pbox .pflex {
      display: flex;
      text-align: center;
      align-items: center;
      gap: 2rem;
      margin-bottom: 1rem;
    }

    .user-profile .pinfo .pbox-container .pbox .pflex ion-icon {
      font-size: 2rem;
      color: white;
      padding: 1rem;
      background-color: #2c3e50;
      text-align: center;
      border-radius: 0.5rem;
      height: 3rem;
      width: 3rem;
      line-height: 4.9rem;
    }

    .user-profile .pinfo .pbox-container .pbox .pflex span {
      font-size: 2.5rem;
      color: var(--main-color);
    }

    .user-profile .pinfo .pbox-container .pbox .pflex p {
      color: var(--light-color);
      font-size: 1.7rem;
    }
  </style>
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->
  <?php include 'pages/navabar.php' ?>

  <main>
    <section class="user-profile">
      <div class="container">
        <h1 class="pheading">user profile</h1>

        <div class="pinfo">
          <div class="puser">
            <img src="assets\images\users\<?= $userdata['true']['profile']; ?>" class="img" alt="<?= $userdata['true']['name']; ?>" />
            <h3> <?= $userdata['true']['name']; ?></h3>
            <p>Email:- <?= $userdata['true']['email']; ?></p>
            <a href="update.php" class="pbtn">update profile</a>
          </div>

          <div class="pbox-container">
            <div class="pbox">
              <div class="pflex">
                <ion-icon name="book"></ion-icon>
                <div>
                  <?php
                  $uid = $userdata['true']['id'];
                  $result = mysqli_query($con, "SELECT * FROM `payments` WHERE `user_id`='$uid'");
                  $download_count = mysqli_num_rows($result); ?>
                  <span><?php echo $download_count; ?>
                    <p>Your Downloads</p>
                </div>
              </div>
              <a href="profile.php?downloads=enctype" class="pbtn">Purched Coures</a>
            </div>

            <div class="pbox">
              <div class="pflex">
                <ion-icon name="heart"></ion-icon>
                <div>
                  <?php
                  $result2 = mysqli_query($con, "SELECT * FROM `quizz_results` WHERE `user_id`='$uid'");
                  $quizz_count = mysqli_num_rows($result2); ?>

                  <span><?php echo $quizz_count; ?>
                    <p>Total Quiezs</p>
                </div>
              </div>
              <a href="profile.php?quiezz=enctype" class="pbtn">Check Result</a>
            </div>

            <div class="pbox">
              <div class="pflex">
                <ion-icon name="chatbubble"></ion-icon>
                <div>
                  <?php
                  $result3 = mysqli_query($con, "SELECT * FROM `feedback` WHERE `user_id`='$uid'");
                  $feedback_count = mysqli_num_rows($result3); ?>

                  <span><?php echo $feedback_count; ?>
                    <p>Feedbacks</p>
                </div>
              </div>
              <a href="profile.php?feedback=enctype" class="pbtn">View Feedbacks</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php if (isset($_GET['downloads'])) { ?>

<div class="Card-center">
    <div class="detail_profile">
        <div class="inner">

            <span class="pricing">
                <span><?php echo $download_count; ?> <small>Downloads</small></span>
            </span>

            <p class="title">Your Downloads</p>
            <p class="info"></p>

            <ul class="features">
                <?php
                while ($row1 = mysqli_fetch_assoc($result)) {
                    $material_id = $row1['material_id'];
                    $material_result = mysqli_query($con, "SELECT * FROM `materials` WHERE `id`='$material_id'");
                    $row_material = mysqli_fetch_assoc($material_result);
                ?>
                    <li class="product_details_more">
                        <div>
                            <a href="material-details.php?t=<?= $row_material['title'] ?>">
                                <span class="icon">
                                    <ion-icon name="arrow-down-outline"></ion-icon>
                                </span>
                            </a>
                            <span><?= $row_material['title'] ?></span>
                            <span>File Name : <strong><?= $row_material['content'] ?></strong></span>
                            <span>File Type : <strong><?= $row_material['type'] ?></strong></span>
                            <span>Paid Ammount : <strong><?= $row_material['price'] ?> ₹ </strong> </span>
                            <span>Purched Date : <strong><?= $row1['date'] ?> </strong> </span>
                        </div>
                    </li>
                   
                <?php } ?>
            </ul>

            <div class="action">
                <a class="button" href="profile.php">Close Detail</a>
            </div>
        </div>
    </div>
</div>

<?php } ?>
  <?php if (isset($_GET['quiezz'])) { ?>

<div class="Card-center">
    <div class="detail_profile">
        <div class="inner">

            <span class="pricing">
                <span><?php echo $quizz_count; ?> <small>Played Quiezs</small></span>
            </span>

            <p class="title">Your Quiezzs</p>
            <p class="info"></p>

            <ul class="features">
                <?php
                while ($row3 = mysqli_fetch_assoc($result2)) {
                    $course_id = $row3['course_id'];
                    $course_result = mysqli_query($con, "SELECT * FROM `courses` WHERE `id`='$course_id'");
                    $row_course = mysqli_fetch_assoc($course_result );
                ?>
                    <li class="product_details_more">
                        <div>
                            <span><?= $row_course['title'] ?></span>
                            <span>Score : <strong><?= $row3['score'] . ' out of '.$row3['total_score']  ?></strong></span>
                            <span>Date : <strong><?= $row3['date'] ?></strong></span>
                        </div>
                    </li>
                   
                <?php } ?>
            </ul>

            <div class="action">
                <a class="button" href="profile.php">Close Detail</a>
            </div>
        </div>
    </div>
</div>

<?php } ?>
  <?php if (isset($_GET['feedback'])) { ?>

<div class="Card-center">
    <div class="detail_profile">
        <div class="inner">

            <span class="pricing">
                <span><?php echo $feedback_count; ?> <small>Played Quiezs</small></span>
            </span>

            <p class="title">Your Quiezzs</p>
            <p class="info"></p>

            <ul class="features">
                <?php
                while ($row3 = mysqli_fetch_assoc($result3)) {
                    $user_id = $userdata['true']['id'];
                    $feedback_view = mysqli_query($con, "SELECT * FROM `feedback` WHERE `user_id`='$user_id'");
                    $row_feedback_view = mysqli_fetch_assoc($feedback_view);
                ?>
                    <li class="product_details_more">
                        <div>
                          <span>
                            Message: <strong><?= $row_feedback_view['message'] ?></strong>
                          </span>
                        </div>
                    </li>
                   
                <?php } ?>
            </ul>

            <div class="action">
                <a class="button" href="profile.php">Close Detail</a>
            </div>
        </div>
    </div>
</div>

<?php } ?>
 
  <?php include 'pages/footer.php' ?>
</body>

</html>