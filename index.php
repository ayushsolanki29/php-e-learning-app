<?php
include 'php/config.php';


session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--- primary meta tag-->
    <title>E Learning -  The Best Program to Enroll for Exchange</title>
    <meta
      name="title"
      content="EduWeb - The Best Program to Enroll for Exchange"
    />
    <meta
      name="description"
      content="This is an education html template made by codewithsadee"
    />
    <?php include 'pages/header.php'?>
  </head>

  <body id="top">
    <!-- 
    - #HEADER
  -->
    <?php include 'pages/navabar.php'?>

    <main>
      <article>
        <!-- 
        - #HERO
      -->

        <section
          class="section hero has-bg-image"
          id="home"
          aria-label="home"
          style="background-image: url('./assets/images/hero-bg.svg')"
        >
          <div class="container">
            <div class="hero-content">
              <?php if (isset($userdata['true'])) {
?>
              <h1 class="h1 section-title">
                Hello,
                <span class="span"><?= $userdata['true']['name']?></span>
              </h1>
              <?php
}else{
?>
              <h1 class="h1 section-title">
                The Best Program to <span class="span">Enroll</span> for
                Exchange
              </h1>
              <?php
}?>

              <p class="hero-text">
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                officia deserunt mollit.
              </p>

              <a href="cources.php" class="btn has-before">
                <span class="span">Find courses</span>

                <ion-icon
                  name="arrow-forward-outline"
                  aria-hidden="true"
                ></ion-icon>
              </a>
            </div>

            <figure class="hero-banner">
              <div class="img-holder one" style="--width: 270; --height: 300">
                <img
                  src="./assets/images/html.png"
                  width="270"
                  height="300"
                  alt="hero banner"
                  class="img-cover"
                />
              </div>

              <div class="img-holder two" style="--width: 240; --height: 370">
                <img
                  src="./assets/images/css.jpg"
                  width="240"
                  height="370"
                  alt="hero banner"
                  class="img-cover"
                />
              </div>

              <img
                src="./assets/images/hero-shape-1.svg"
                width="380"
                height="190"
                alt=""
                class="shape hero-shape-1"
              />
              <img
                src="./assets/images/hero-shape-2.png"
                width="622"
                height="551"
                alt=""
                class="shape hero-shape-2"
              />
            </figure>
          </div>
        </section>

        <!-- 
        - #CATEGORY
      -->

        <section class="section category" aria-label="category">
          <div class="container">
            <p class="section-subtitle">Categories</p>

            <h2 class="h2 section-title">
              Course <span class="span">Categories</span> For Learning.
            </h2>

            <p class="section-text">
              Consectetur adipiscing elit sed do eiusmod tempor.
            </p>

            <ul class="grid-list">
              <li>
                <div class="category-card" style="--color: 170, 75%, 41%">
                  <div class="card-icon">
                    <img
                      src="./assets/images/category-1.svg"
                      width="40"
                      height="40"
                      loading="lazy"
                      alt="Online Degree Programs"
                      class="img"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Web Development</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                  </p>

                  <span class="card-badge">7 Courses</span>
                </div>
              </li>

              <li>
                <div class="category-card" style="--color: 351, 83%, 61%">
                  <div class="card-icon">
                    <img
                      src="./assets/images/category-2.svg"
                      width="40"
                      height="40"
                      loading="lazy"
                      alt="Non-Degree Programs"
                      class="img"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">AI and ML</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                  </p>

                  <span class="card-badge">4 Courses</span>
                </div>
              </li>

              <li>
                <div class="category-card" style="--color: 229, 75%, 58%">
                  <div class="card-icon">
                    <img
                      src="./assets/images/category-3.svg"
                      width="40"
                      height="40"
                      loading="lazy"
                      alt="Off-Campus Programs"
                      class="img"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Data Science</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                  </p>

                  <span class="card-badge">8 Courses</span>
                </div>
              </li>

              <li>
                <div class="category-card" style="--color: 42, 94%, 55%">
                  <div class="card-icon">
                    <img
                      src="./assets/images/category-4.svg"
                      width="40"
                      height="40"
                      loading="lazy"
                      alt="Hybrid Distance Programs"
                      class="img"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Game Making</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor consec tur elit adicing sed umod tempor.
                  </p>

                  <span class="card-badge">8 Courses</span>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #ABOUT
      -->

        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <div class="img-holder" style="--width: 520; --height: 370">
                <img
                  src="./assets/images/about-banner.jpg"
                  width="520"
                  height="370"
                  loading="lazy"
                  alt="about banner"
                  class="img-cover"
                />
              </div>

              <img
                src="./assets/images/about-shape-1.svg"
                width="360"
                height="420"
                loading="lazy"
                alt=""
                class="shape about-shape-1"
              />

              <img
                src="./assets/images/about-shape-2.svg"
                width="371"
                height="220"
                loading="lazy"
                alt=""
                class="shape about-shape-2"
              />

              <img
                src="./assets/images/about-shape-3.png"
                width="722"
                height="528"
                loading="lazy"
                alt=""
                class="shape about-shape-3"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">About Us</p>

              <h2 class="h2 section-title">
                Over 10 Years in <span class="span">Distant learning</span> for
                Skill Development
              </h2>

              <p class="section-text">
                Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod
                ex tempor incididunt labore dolore magna aliquaenim ad minim.
              </p>

              <ul class="about-list">
                <li class="about-item">
                  <ion-icon
                    name="checkmark-done-outline"
                    aria-hidden="true"
                  ></ion-icon>

                  <span class="span">Expert Trainers</span>
                </li>

                <li class="about-item">
                  <ion-icon
                    name="checkmark-done-outline"
                    aria-hidden="true"
                  ></ion-icon>

                  <span class="span">Online Remote Learning</span>
                </li>

                <li class="about-item">
                  <ion-icon
                    name="checkmark-done-outline"
                    aria-hidden="true"
                  ></ion-icon>

                  <span class="span">Lifetime Access</span>
                </li>
              </ul>

              <img
                src="./assets/images/about-shape-4.svg"
                width="100"
                height="100"
                loading="lazy"
                alt=""
                class="shape about-shape-4"
              />
            </div>
          </div>
        </section>

        <!-- 
        - #COURSE
      -->

        <section class="section course" id="courses" aria-label="course">
          <div class="container">
            <p class="section-subtitle">Popular Courses</p>

            <h2 class="h2 section-title">Pick A Course To Get Started</h2>

            <ul class="grid-list">
              <?php
              $run_cources = mysqli_query($con,  "SELECT * FROM `courses` LIMIT 3");

              while ($row_cource = mysqli_fetch_array($run_cources)) {
                $cid = $row_cource['id'];
                $ctitle = $row_cource['title'];
                $subdescription = $row_cource['sub-description'];
                $cduration = $row_cource['duration'];
                $ccategory = $row_cource['category'];
                $clevel = $row_cource['level'];
                $clessons = $row_cource['lessons'];
                $cimg = $row_cource['img'];
                ?>
              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 370; --height: 220"
                  >
                    <img
                      src="assets/images/cources/<?= $cimg?>"
                      width="370"
                      height="220"
                      loading="lazy"
                      alt="Build Responsive Real- World Websites with HTML and CSS"
                      class="img-cover"
                    />
                  </figure>

                  <div class="abs-badge">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                    <span class="span">
                      <?= $cduration . ' Minutes' ?>
                    </span>
                  </div>

                  <div class="card-content">
                    <span class="badge">
                      <?= $ccategory ?>
                    </span>

                    <h3 class="h3">
                      <a
                        href="cource-details.php?t=<?= $ctitle ?>"
                        class="card-title"
                      >
                        <?= $ctitle ?>
                      </a>
                    </h3>

                    <div class="wrapper">
                      <p><?= $subdescription?></p>
                    </div>

                    <data class="price">
                      <?= $clevel ?>
                    </data>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <ion-icon
                          name="library-outline"
                          aria-hidden="true"
                        ></ion-icon>
                        <?php   // Fetch the count of records where payment_status is 'Paid'
                          $select_totalless = "SELECT COUNT(*) AS totalless FROM `lessons` WHERE course_id = $clessons";
                          $run_select_totalless = mysqli_query($con, $select_totalless);

                          if ($run_select_totalless) {
                            $row_less = mysqli_fetch_assoc($run_select_totalless);
                            $total_lessions = $row_less['totalless'];
                          } else {
                            $total_lessions = 0;
                          } ?>
                        <span class="span">
                          <?= $total_lessions ?>
                          Lessons
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <?php
              }
  
            ?>
            </ul>

            <a href="cources.php" class="btn has-before">
              <span class="span">Browse more courses</span>

              <ion-icon
                name="arrow-forward-outline"
                aria-hidden="true"
              ></ion-icon>
            </a>
          </div>
        </section>

        <!-- 
        - #VIDEO
      -->

        <section
          class="video has-bg-image"
          aria-label="video"
          style="background-image: url('./assets/images/video-bg.png')"
        >
          <div class="container">
            <div class="video-card">
              <div
                class="video-banner img-holder has-after"
                style="--width: ; --height: "
              >
                <img
                  src="./assets/images/video-banner.jpg"
                  width="970"
                  height="550"
                  loading="lazy"
                  alt="video banner"
                  class="img-cover"
                />

                <button class="play-btn" aria-label="play video">
                  <ion-icon name="play" aria-hidden="true"></ion-icon>
                </button>
              </div>

              <img
                src="./assets/images/video-shape-1.png"
                width="1089"
                height="605"
                loading="lazy"
                alt=""
                class="shape video-shape-1"
              />

              <img
                src="./assets/images/video-shape-2.png"
                width="158"
                height="174"
                loading="lazy"
                alt=""
                class="shape video-shape-2"
              />
            </div>
          </div>
        </section>

        <!-- 
        - #STATE
      -->

        <section class="section stats" aria-label="stats">
          <div class="container">
            <ul class="grid-list">
              <li>
                <div class="stats-card" style="--color: 170, 75%, 41%">
                  <?php
                  $result = mysqli_query($con, "SELECT COUNT(*) AS user_count FROM `users`");
                  $user_count = mysqli_fetch_assoc($result);
                  ?>
                  <h3 class="card-title"><?= $user_count['user_count']?></h3>

                  <p class="card-text">Student Enrolled</p>
                </div>
              </li>

              <li>
                <div class="stats-card" style="--color: 351, 83%, 61%">
                  <?php   $result2 = mysqli_query($con, "SELECT COUNT(*) AS cource_count FROM `courses`");
                  $cource_count = mysqli_fetch_assoc($result2);?>
                  <h3 class="card-title">
                    <?=   $cource_count['cource_count']?>
                  </h3>

                  <p class="card-text">Cources</p>
                </div>
              </li>

              <li>
                <div class="stats-card" style="--color: 260, 100%, 67%">
                  <h3 class="card-title">100%</h3>

                  <p class="card-text">Satisfaction Rate</p>
                </div>
              </li>

              <li>
                <div class="stats-card" style="--color: 42, 94%, 55%">
                  <?php
                  $result3 = mysqli_query($con, "SELECT COUNT(*) AS material_count FROM `materials`");
                  $material_count = mysqli_fetch_assoc($result3);
                  ?>
                  <h3 class="card-title">
                    <?=  $material_count['material_count']?>
                  </h3>

                  <p class="card-text">Materials</p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #BLOG
      -->

        <section
          class="section blog has-bg-image"
          id="blog"
          aria-label="blog"
          style="background-image: url('./assets/images/blog-bg.svg')"
        >
          <div class="container">
            <p class="section-subtitle">Materials For Your Needs</p>
            <h2 class="h2 section-title">Get Materials</h2>
            <ul class="grid-list">
              <?php
              $run_materials = mysqli_query($con,  "SELECT * FROM `materials` LIMIT 3");

              while ($row_materials = mysqli_fetch_array($run_materials)) {
                $mid = $row_materials['id'];
                $mtitle = $row_materials['title'];
                $msubtitle= $row_materials['sub-title'];
                $mtype = $row_materials['type'];
                $mdownloads = $row_materials['downloads'];
                $mdate = $row_materials['date'];
                $mimg = $row_materials['img'];
                ?>
              <li>
                <div class="blog-card">
                  <figure
                    class="card-banner img-holder has-after"
                    style="--width: 370; --height: 370"
                  >
                    <img
                      src="assets/images/materials/<?=$mimg?>"
                      width="370"
                      height="370"
                      loading="lazy"
                      alt="Become A Better Blogger: Content Planning"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <a
                      href="material-details.php?t=<?= $mtitle ?>"
                      class="card-btn"
                      aria-label="read more"
                    >
                      <ion-icon
                        name="arrow-forward-outline"
                        aria-hidden="true"
                      ></ion-icon>
                    </a>

                    <a href="#" class="card-subtitle"><?= $mtype ?></a>

                    <h3 class="h3">
                      <a
                        href="material-details.php?t=<?= $mtitle ?>"
                        class="card-title"
                        ><?= $mtitle ?></a
                      >
                    </h3>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <ion-icon
                          name="calendar-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="span"><?= $mdate  ?></span>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon
                          name="chatbubbles-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="span"
                          ><?= $mdownloads ?>
                          Downlaods</span
                        >
                      </li>
                    </ul>

                
                  </div>
                </div>
              </li>

              <?php }?>
            </ul>
            <br />
            <a href="materials.php" class="btn has-before">
              <span class="span">Browse More Materials</span>

              <ion-icon
                name="arrow-forward-outline"
                aria-hidden="true"
              ></ion-icon>
            </a>
            <img
              src="./assets/images/blog-shape.png"
              width="186"
              height="186"
              loading="lazy"
              alt=""
              class="shape blog-shape"
            />
            <br />
          </div>
        </section>
      </article>
    </main>

    <!-- 
    - #FOOTER
  -->
    <?php include 'pages/footer.php'?>
  </body>
</html>
