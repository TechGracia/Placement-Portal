<?php

session_start();

require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'

    ?>


</head>

<body>

    <?php

    include 'php/header.php'

    ?>

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
            <h2>Welcome to <span>ST. JOHN'S Placement Cell</span></h2>
            <p>For Your Entire Placement Journey.</p>
            <div class="d-flex">
                <a href="login.php" class="btn-get-started scrollto">Login</a>

            </div>
        </div>
    </section>

    <main id="main">

        </div>

        </div>
        </section>
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.svg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section>
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">



                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Objectives</h3>
                                <p class="fst-itali">
                                    Our Placement Portal serves various objectives:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Developing the students to meet the Industries recruitment process.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To motivate students to develop Technical knowledge and soft skills in
                                        terms of career planning, goal setting.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To produce world-class professionals who have excellent analytical skills,
                                        communication skills, team building spirit and ability to work in cross cultural
                                        environment.</li>

                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    
                    <section id="statistics" class="content-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center latest-job margin-bottom-20">
                                    <h1>Our Statistics</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Total Drives</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-paper"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM company WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Job Offers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE resume!=''";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>CV'S/Resume</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Daily Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </section>


    </main>
    <?php

    include 'php/footer.php';
    ?>



</body>

</html>