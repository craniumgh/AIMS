<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>www.aims.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="20x20" href="/assets/img/logo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!-- Loader -->
    <div class="loader">
        <div class="loader-img"></div>
    </div>

    <!-- Top menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#top-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="explory.php">Explore</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="scroll-link" href="#footer">Contact</a></li>
                </ul>
                <div class="navbar-text navbar-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Loader -->
    <div class="loader">
        <div class="loader-img"></div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>Explore the world of Aims</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio -->
    <div class="portfolio-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 portfolio section-description wow fadeIn">
                    <h2>We've completed 537 projects since we started back in 2015. Check them out!</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <?php
                                            include "connect.php";
                                            $query = "SELECT `PICTURES` FROM `image` WHERE ID=1 ";
                                            $resut = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($resut)) {
                                                echo '
                                         
                                             <img src="data:PICTURES/jpeg;base64,' . base64_encode($row['PICTURES']) . '"
                                                 height="100" width="100" class="rounded-circle" />
                                         
                                             ';
                                            }
                                            ?>
                        <!-- <img src="assets/img/portfolio/1.jpg" alt="" data-at2x="assets/img/portfolio/1.jpg"> -->
                    </div>
                    <h3><a>Our Metal work Team</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> January 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
                <div class="col-sm-4 portfolio-box wow fadeInDown">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/2.jpg" alt="" data-at2x="assets/img/portfolio/2.jpg">
                    </div>
                    <h3><a>Safety Is Key</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> March 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/3.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                    </div>
                    <h3><a>WoodWork</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/4.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                    </div>
                    <h3><a>WoodWork</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/5.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                    </div>
                    <h3><a>WoodWork</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/6.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                    </div>
                    <h3><a>WoodWork</a></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et.</p>
                </div>
            </div>

        </div>
    </div>



    <!-- Footer -->
    <footer class="footer-container">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 footer-left">
                    <h3>Contact us</h3>
                    <div class="contact-form">
                        <form role="form" action="assets/contact.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input type="text" name="email" placeholder="Email..."
                                    class="contact-email form-control" id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-subject">Subject</label>
                                <input type="text" name="subject" placeholder="Subject..."
                                    class="contact-subject form-control" id="contact-subject">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-message">Message</label>
                                <textarea name="message" placeholder="Message..." class="contact-message form-control"
                                    id="contact-message"></textarea>
                            </div>
                            <button type="submit" class="btn">Send message</button>
                        </form>
                    </div>
                </div>

                <div class="col-sm-5 col-sm-offset-1 footer-right">
                    <h3>Follow us</h3>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="footer-copyright">
                        2023 @aimsGhana. All rights reserved.
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 footer-bottom">
                    <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>