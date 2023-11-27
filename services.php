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
                    <h2>
                        Our Services
                    </h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Services -->
    <div class="services-container section-container">
        <div class="container">
            <br>
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
                                The mission of on-site safety training is to ensure that participants have the essential
                                knowledge, skills, and competencies needed to operate in a safe, efficient, and
                                productive manner within their work environments.
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
                            <p> The mission of Earth moving competency-based training is to ensure operators of
                                earth-moving equipment have the necessary knowledge, skills, and competencies needed to
                                operate equipment safely, efficiently, and productively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>
                        Artisan Training
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- More services -->
    <div class="more-services-container section-container">
        <div class="container">
            <div class="row">
                <h2>
                    The aim of our Artisan training are to:
                </h2>
                <p style="text-align: left;">



                    1. Skill Development: The primary aim of artisan training is to develop practical skills in the
                    chosen trade. This includes hands-on experience in working with tools, equipment, and materials
                    related to the specific field. The goal is to make individuals proficient in their trade. <br>

                    2. Safety Awareness: Safety is a critical aspect of any trade. Artisan training programs aim to
                    instill a strong understanding of safety protocols and practices to prevent accidents and injuries
                    in the workplace. <br>

                    3. Technical Knowledge: In addition to hands-on skills, artisan training provides a solid foundation
                    of theoretical knowledge related to the trade. This knowledge includes concepts, principles, and
                    best practices that are essential for performing tasks effectively. <br>

                    4. Problem-Solving Skills: Artisan training programs encourage problem-solving skills by teaching
                    individuals how to analyze and solve practical challenges that may arise in their specific field.
                    <br>

                    5. Quality Workmanship: A key aim is to produce skilled artisans who can produce high-quality work.
                    This involves attention to detail, precision, and a commitment to producing products or services
                    that meet industry standards. <br>

                    6. Adaptability: Artisan training equips individuals with the ability to adapt to new technologies,
                    tools, and techniques within their field, ensuring they remain relevant and competitive in the job
                    market. <br>

                    7. Entrepreneurship: Some training programs aim to prepare individuals for self-employment and
                    entrepreneurship in their chosen trade. This includes teaching them business skills, financial
                    management, and marketing. <br>
                </p>
                <h2>
                    The objectives of the Artisan training are to:
                </h2>
                <p style="text-align: left;">
                    The objectives of artisan training programs in fields such as Metal Works, Civil Works, Electricals
                    and Electronics, and Mechanics are to impart practical skills, theoretical knowledge, and safety
                    awareness to individuals, enabling them to excel in their chosen trade. These programs aim to
                    develop a competent workforce capable of producing high-quality work, solving practical challenges,
                    and adapting to evolving industry standards and technologies. Additionally, artisan training seeks
                    to foster professionalism, work ethics, and teamwork, while also providing opportunities for
                    certification, career advancement, and potentially entrepreneurship, contributing to economic and
                    community development.
                </p>
                <h2>
                    Our Artisan Training is made up of:
                </h2>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🔧</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Metal Works</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🔨</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Civil Works</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">⚡</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Electricals and Electronics</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🔧</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Mechanics</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>
                        Safety Training
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- More services -->
    <div class="more-services-container section-container">
        <div class="container">
            <div class="row">
                <p style="text-align: left;">
                    We aim to instill in participants a deep understanding of the potential hazards associated with
                    their job roles and empower them with the tools to effectively mitigate these risks on-site.

                    Ultimately, our goal is to empower participants with the skills, knowledge, and competencies
                    required to carry out their work tasks with the utmost efficiency and effectiveness, all while
                    minimizing risks and maximizing productivity in their specific work environments.
                </p>

                <h2>
                    The aim of the safety training are to:
                </h2>
                <p style="text-align: left;">

                    1. Enhance Safety Awareness: Our training aims to increase participants' awareness of potential
                    hazards in their work environments and instill a proactive mindset for identifying and mitigating
                    risks. <br>

                    2. Compliance with Regulations: We strive to ensure that participants are well-versed in safety
                    regulations and standards relevant to their industries, promoting full compliance and avoiding legal
                    complications. <br>

                    3. Accident Prevention: Our training aims to significantly reduce workplace accidents by equipping
                    participants with the knowledge and skills needed to prevent common workplace incidents. <br>

                    4. Skill Development: We focus on developing participants' practical skills, allowing them to
                    operate equipment, machinery, or perform tasks with a high degree of safety and efficiency. <br>

                    5. Emergency Response: Our training includes comprehensive instruction on how to respond effectively
                    to emergencies, ensuring participants are prepared to handle unforeseen situations. <br>

                    6. Teamwork and Communication: We emphasize the importance of clear communication and teamwork in
                    maintaining a safe work environment, fostering a culture of collaboration and vigilance. <br>

                    7. Equipment Maintenance: Participants will gain proficiency in equipment maintenance, ensuring that
                    machinery operates safely and efficiently, minimizing the risk of breakdowns. <br>

                </p>
                <h2>
                    The objectives of the safety training are to:
                </h2>
                <p style="text-align: left;">
                    Our safety training program is built upon a set of clear and focused objectives. <br>
                    Firstly, we aim to educate participants about industry-specific safety regulations and standards,
                    ensuring full compliance within their work environments. <br>
                    Secondly, our program seeks to enhance participants' practical skills, enabling them to operate
                    equipment and perform tasks safely and efficiently. <br>
                    Thirdly, we emphasize the importance of effective communication and teamwork, fostering a
                    collaborative atmosphere that contributes to safer workplaces. <br>
                    Additionally, we strive to equip participants with the knowledge and tools needed to prevent
                    workplace accidents and respond swiftly to emergencies. <br>
                    Lastly, our program promotes continuous improvement in safety practices, empowering participants to
                    actively seek out and implement safer work methods. <br>
                    Our ultimate objective is to create a workplace culture where safety is paramount, benefiting
                    employees' well-being, productivity, and overall success.
                </p>
                <h2>
                    Our Safety Training is made up of:
                </h2>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🩹</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>First-Aid and Basic Life Support</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">⚠️</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Occupational Health and Safety</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🔥</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Firefighting and Fire Management</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>
                        Earth-moving Equipment Operator Training
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- More services -->
    <div class="more-services-container section-container">
        <div class="container">
            <div class="row">
                <h2>
                    The aim of earth moving competency-based training are to:
                </h2>
                <p style="text-align: left;">
                    1. Provide participants with the theoretical knowledge and practical skills necessary for the safe
                    and efficient operation of earth moving equipment. <br>
                    2. Ensure that participants can apply their skills and knowledge to operate earth moving equipment
                    in a range of operational environments. <br>
                    3. Provide participants with the necessary competencies to comply with relevant occupational health
                    and safety regulations. <br>
                    4. Develop participants' skills and knowledge in recognizing and responding to hazards, conducting
                    risk assessments, and managing emergency situations. <br>
                    5. Foster a culture of safety in the workplace and promote safe work practices among participants.
                    <br>
                    6. Enhance participants' understanding of the importance of regular maintenance and servicing of
                    earth moving equipment for safe and efficient operation. <br>
                    7. Help participants to develop effective communication and teamwork skills for working in a diverse
                    and dynamic workplace environment. <br>
                </p>

                <h2>
                    The objectives of earth moving competency-based training may include, but are not limited to:
                </h2>
                <p style="text-align: left;">
                    1. Developing an understanding of the technical characteristics and operational principles of
                    different types of earth moving equipment. <br>
                    2. Developing skills in pre-start checks, maintenance and servicing, and safe operation of earth
                    moving equipment. <br>
                    3. Understanding the relevant legislation, regulations, and standards related to earth moving
                    operations, including occupational health and safety (OHS) legislation. <br>
                    4. Identifying hazards and conducting risk assessments in an earth moving operational environment
                    and applying appropriate risk management strategies. <br>
                    5. Understanding and effectively communicating with the team members, supervisors, and clients in
                    the workplace. <br>
                    6. Developing effective teamwork skills to work collaboratively, and supportively with team members.
                    <br>
                    7. Ensuring that participants understand the importance of monitoring and quality control in
                    relation to earth moving operations. <br>
                    8. Assessing the competency of participants in operating earth moving equipment and providing
                    feedback and recommendations for future improvement. <br>
                    9. Providing recognition and certification of the participant's skills and competencies in earth
                    moving equipment operation. <br>
                </p>
                <h2>
                    Our earth moving competency-based training, involves:
                </h2>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🚜</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Excavator Operator Training</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🚚</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Dump Truck Operator Training</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🚜</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Bulldozer Operator Training</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🏗️</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Wheel Loader Operator Training</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 more-services-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="more-services-box-icon">
                                <i class="icon">🏭</i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3>Forklift Operator Training</h3>
                        </div>
                    </div>
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
                                    id="contact-message"></textarea>``
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