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

</head>

<style>
h1,
h2,
h3,
h4,
h5,
h6 {}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    outline: none;
}

a,
a:active,
a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

img {
    max-width: 100%;
    height: auto;
}

section {
    padding: 60px 0;
    /* min-height: 100vh;*/
}

.sec-title {
    position: relative;
    z-index: 1;
    margin-bottom: 60px;
}

.sec-title .title {
    position: relative;
    display: block;
    font-size: 18px;
    line-height: 24px;
    color: #00aeef;
    font-weight: 500;
    margin-bottom: 15px;
}

.sec-title h2 {
    position: relative;
    display: block;
    font-size: 40px;
    line-height: 1.28em;
    color: #222222;
    font-weight: 600;
    padding-bottom: 18px;
}

.sec-title h2:before {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 50px;
    height: 3px;
    background-color: #d1d2d6;
}

.sec-title .text {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 400;
    margin-top: 35px;
}

.sec-title.light h2 {
    color: #ffffff;
}

.sec-title.text-center h2:before {
    left: 50%;
    margin-left: -25px;
}

.list-style-one {
    position: relative;
}

.list-style-one li {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #222222;
    font-weight: 400;
    padding-left: 35px;
    margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #ff2222;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover {
    color: #44bce2;
}

.btn-style-one {
    position: relative;
    display: inline-block;
    font-size: 17px;
    line-height: 30px;
    color: #ffffff;
    padding: 10px 30px;
    font-weight: 600;
    overflow: hidden;
    letter-spacing: 0.02em;
    background-color: #00aeef;
}

.btn-style-one:hover {
    background-color: #0794c9;
    color: #ffffff;
}

.about-section {
    position: relative;
    padding: 120px 0 70px;
}

.about-section .sec-title {
    margin-bottom: 45px;
}

.about-section .content-column {
    position: relative;
    margin-bottom: 50px;
}

.about-section .content-column .inner-column {
    position: relative;
    padding-left: 30px;
}

.about-section .text {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 400;
}

.about-section .list-style-one {
    margin-bottom: 45px;
}

.about-section .btn-box {
    position: relative;
}

.about-section .btn-box a {
    padding: 15px 50px;
}

.about-section .image-column {
    position: relative;
}

.about-section .image-column .text-layer {
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column {
    position: relative;
    padding-left: 80px;
    padding-bottom: 0px;
}

.about-section .image-column .inner-column .author-desc {
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: orange;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}

.about-section .image-column .inner-column .author-desc h2 {
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
    margin: 0;
}

.about-section .image-column .inner-column .author-desc span {
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #fff;
    display: block;
    font-weight: 400;
}

.about-section .image-column .inner-column:before {
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #cf811b;
}

.about-section .image-column .image-1 {
    position: relative;
}

.about-section .image-column .image-2 {
    position: absolute;
    left: 0;
    bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img {
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    border-radius: 46px;
}

.about-section .image-column .video-link {
    position: absolute;
    left: 70px;
    top: 170px;
}

.about-section .image-column .video-link .link {
    position: relative;
    display: block;
    font-size: 22px;
    color: #191e34;
    font-weight: 400;
    text-align: center;
    height: 100px;
    width: 100px;
    line-height: 100px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover {
    background-color: #191e34;
    color: blue;
}



/* Profile */

.title {
    text-align: center;
    text-transform: capitalize;
    color: #95816a;
    margin: 10px 0;
    position: relative;
}

.title::after {
    content: "";
    position: absolute;
    width: 20%;
    height: 2px;
    background-image: linear-gradient(to left, transparent 5%, #95826a);
    bottom: -10px;
    left: 50%;
    transform: translate(-50%);
}

.team-row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 40px 0;
}

.member {
    flex: 1 1 250px;
    margin: 20px;
    text-align: center;
    padding: 20px 10px;
    cursor: pointer;
    max-width: 300px;
    transition: all 0.3s;
}

.member:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-20px);
}

.member img {
    display: block;
    width: 150px;
    height: 150px;
    object-fit: cover;
    border: 4px solid #df912b;
    border-radius: 50%;
    margin: 0 auto;
}

.member h2 {
    text-transform: uppercase;
    font-size: 24px;
    color: #726a95;
    margin: 15px 0;
}

.member p {
    font-size: 15px;
    color: #838383;
    line-height: 1.6;
}

.icon-block {
    float: left;
    width: 100%;
    margin-top: 15px;
}

.icon-block a {
    text-decoration: none;
    padding: 10px;
}
</style>

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

    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>About Aims</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>We are Aims Ghana working since 2015</h2>
                        </div>
                        <div class="text">Africa Institute of Mines and Safety Ltd is an innovative indigenous Company
                            in the Upper East Region that seeks to provide innovative Competency-based training leading
                            to the award of Certificate of Competency in Health and Safety, Earth moving equipment
                            operator training, and artisan training.</div>
                        <div class="text">
                            Guided by our motto “Empowerment through Skill development,” our courses are carefully
                            organized to reflect current industry demands. At Africa Institute of Mines and Safety Ltd,
                            our focus is to train individuals to a level of competency that leads to self-empowerment
                            through skill development.
                        </div>
                    </div>
                </div>


                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                    title="Rahul Kumar Yadav" src="assets/img/ab.jpg" alt=""></a></figure>

                    </div>
                </div>

            </div>
            <div class="sec-title">
                <h2>What contributions can the community benefit from a mining company?</h2>
            </div>
            <p style="text-align: left;">
                Aims as a Mining Company can contribute to the community in several ways: <br>

                1. Job Creation: Mining operations require a skilled workforce, which can lead to the creation of
                employment opportunities within the community. This can improve local economies and reduce unemployment
                rates. <br>

                2. Economic Growth: Mining companies often invest in infrastructure development, including roads,
                bridges, and utilities, which can help stimulate local economies. They also generate tax revenue, which
                can be used for community development projects and public services. <br>

                3. Community Development: Mining companies can actively contribute to the development of the communities
                in which they operate. This can include building schools, healthcare facilities, and housing for
                employees and community members. They may also support local initiatives, such as educational programs,
                skills training, and entrepreneurship opportunities. <br>

                4. Environmental Stewardship: Responsible mining companies prioritize environmental sustainability. They
                invest in technologies and practices that minimize the environmental impact of their operations, such as
                water management systems, land rehabilitation, and reducing carbon emissions. By doing so, they help
                protect natural resources and biodiversity for the benefit of the community. <br>

                5. Social Responsibility: Mining companies can engage in corporate social responsibility activities,
                such as supporting local charities, funding scholarships, and sponsoring community events. They may also
                foster partnerships with local organizations to address social issues and contribute to community
                well-being. <br>

                6. Public Safety: Mining companies prioritize worker safety and invest in training programs, safety
                equipment, and protocols to ensure a safe working environment. This commitment to safety extends to the
                broader community through controlled blasting practices, dust control measures, and traffic safety
                initiatives. <br>

                7. Infrastructure Improvement: Mining companies often invest in upgrading local infrastructure, such as
                roads, ports, and railways, which can benefit not only the mining operations but also the surrounding
                communities by improving transportation and connectivity. <br>

                By actively engaging in these areas, mining companies can leave a positive and lasting impact on the
                community while operating in a responsible and sustainable manner. <br>
            </p>
        </div>
    </section>

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
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Our Vission</h2>
                                    <p>To become a leading competency-based skills development training company in the
                                        Upper East region and beyond.</p>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-text">
                                    <p>
                                    <h2>Our Mission</h2>
                                    <p>To provide the best combination of sector know-how, professional skills, and
                                        technology, to deliver exceptional competency-based training to our clients.</p>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <h1 class="text-center"><span>Our Team: </span>Together we share <i class="fa fa-heart"></i> with our
            traineers.</a></h1>
        <div class="team-row">
            <div class="member">
                <img src="assets/img/CEO.jpeg" alt="">
                <h2>Tiwol Emmanuel Boabil</h2>
                <p>CEO</p>
                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i
                            class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-linkedin"></i></a></div>
            </div>
            <div class="member">
                <img src="assets/img/Adm.jpeg" alt="">
                <h2>Nicodemus Yambalga</h2>
                <p>Administrative-Director</p>
                <div style="height: 45px;"></div>
                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i
                            class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-linkedin"></i></a></div>
            </div>
            <div class="member">
                <img src="assets/img/Fin.jpeg" alt="">
                <h2>Abigail Adumolga</h2>
                <p>Finance-Director</p>
                <div style="height: 45px;"></div>
                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i
                            class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-linkedin"></i></a></div>
            </div>

            <div class="member">
                <img src="assets/img/pro.jpeg" alt="">
                <h2>Prosper Atiah Nsohlebna</h2>
                <p>IT-Director</p>
                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i
                            class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
    </section>


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
                            <button type="submit" class="btn" name="submit">Send message</button>
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
                        &copy; Maren One Page Bootstrap Template <br>Download it for free on <a
                            href="http://azmind.com">AZMIND</a>
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