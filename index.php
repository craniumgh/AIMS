<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $EMAIL = $_POST['EMAIL'];
    $SUBJECT = $_POST['SUBJECT'];

    $MESSAGE = $_POST['MESSAGE'];



    $sql = "INSERT INTO `contact`(`EMAIL`, `SUBJECT`, `MESSAGE`) VALUES('$EMAIL','$SUBJECT','$MESSAGE')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    echo " Data inserted";
    } else {
    die(mysqli_error(($conn)));
    }
    }

    ?>
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
                    <li><a class="scroll-link" href="#top-content">Home</a></li>
                    <li><a class="scroll-link" href="#services">Services</a></li>
                    <li><a class="scroll-link" href="#testimonials">Values</a></li>
                    <li><a class="scroll-link" href="#portfolio">Explore</a></li>
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

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <div class="logo wow fadeInDown">
                            <a href="index.php"></a>
                        </div>
                        <h1 class="wow fadeInLeftBig">Looking for a platform to elevate your engineering career?</h1>
                        <div class="description wow fadeInLeftBig">
                            <p>
                                Enhance your skills, ensure safety, and unlock opportunities in dynamic fields. What are
                                you waiting for?
                            </p>
                        </div>
                        <div class="top-big-link wow fadeInUp">
                            <a class="btn btn-link-1" href="form.php">Get Started Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Services -->
    <div class="services-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 services section-description wow fadeIn">
                    <h2>Our services</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 services-box wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-box-icon">
                                <i class="fa fa-magic"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3>Artisan Training</h3>
                            <p>Our artisan training programs are dedicated to nurturing specialized craftsmanship,
                                preserving cultural heritage, and empowering individuals with valuable skills for
                                creative and economic enrichment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 services-box wow fadeInDown">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-box-icon">
                                <i class="fa fa-cog"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3>Safety Training</h3>
                            <p>
                                Our training aims to increase participants' awareness of potential hazards in their work
                                environments and instill a proactive mindset for identifying and mitigating risks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 services-box wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-box-icon">
                                <i class="fa fa-car"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3>Earth-moving Equipment Operator Training</h3>
                            <p> Develop participants' skills and knowledge in recognizing and responding to hazards,
                                conducting risk assessments, and managing emergency situations. </p>
                        </div>
                    </div>
                </div>

                <a class="btn btn-link-1" href="services.php">Read More</a>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <p>
                        Here at AIMS, we offer you a one of a kind training in Safety! "
                        We provide competency-based training in:
                        <br> First-Aid and Basic Life Support.
                        <br> Occupational health and safety.
                        <br> Firefighting and fire management.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 section-bottom-button wow fadeInUp">
                    <a class="btn btn-link-1" href="services.php">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="portfolio-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 portfolio section-description wow fadeIn">
                    <h2>Explore</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>We've completed 537 projects since we started back in 2015. Check them out!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="assets/img/portfolio/1.jpg" alt="" data-at2x="assets/img/portfolio/1.jpg">
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
            </div>
            <div class="row">
                <div class="col-sm-12 section-bottom-button wow fadeInUp">
                    <a class="btn btn-link-1" href="explory.php">Load more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials section-description wow fadeIn">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/1.jpg" alt=""
                                        data-at2x="assets/img/testimonials/1.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Honesty</h2>
                                    <p>We are committed to honesty in all our interactions.</p>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/2.jpg" alt=""
                                        data-at2x="assets/img/testimonials/2.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Integrity</h2>
                                    <p>We uphold the highest standards of integrity.</p>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/3.jpg" alt=""
                                        data-at2x="assets/img/testimonials/3.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Reliability</h2>
                                    <p>Our clients can rely on us to deliver on our promises.</p>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/4.jpg" alt=""
                                        data-at2x="assets/img/testimonials/4.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Professional Quality Services</h2>
                                    <p>We provide professional and high-quality services.</p>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab5">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/5.png" alt=""
                                        data-at2x="assets/img/testimonials/4.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Confidentiality</h2>
                                    <p>We prioritize the confidentiality of our clients.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer-container">
        <div class="container">
            <div class="row">
                <?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $EMAIL = $_POST['EMAIL'];
    $SUBJECT = $_POST['SUBJECT'];

    $MESSAGE = $_POST['MESSAGE'];



    $sql = "INSERT INTO `contact`(`EMAIL`, `SUBJECT`, `MESSAGE`) VALUES (' $EMAIL','$SUBJECT',' $MESSAGE')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    echo " Data inserted";
    } else {
    die(mysqli_error(($conn)));
    }
    }

    ?>
                <div class="col-sm-6 footer-left">
                    <h3>Contact us</h3>
                    <div class="contact-form">
                        <form role="form" action="index.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input type="text" name="EMAIL" placeholder="Email..."
                                    class="contact-email form-control" id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-subject">Subject</label>
                                <input type="text" name="SUBJECT" placeholder="Subject..."
                                    class="contact-subject form-control" id="contact-subject">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-message">Message</label>
                                <textarea name="MESSAGE" placeholder="Message..." class="contact-message form-control"
                                    id="contact-message"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn">Send message</button>
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

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>