<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $APPLICANT_NAME = $_POST['APPLICANT_NAME'];
    $FATHER_NAME = $_POST['FATHER_NAME'];
    $MOTHER_NAME = $_POST['MOTHER_NAME'];
    $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
    $MOBILE = $_POST['MOBILE'];
    $GENDER = $_POST['GENDER'];
    $RELIGION = $_POST['RELIGION'];
    $BLOOD_GROUP = $_POST['BLOOD_GROUP'];
    $NATIONALITY = $_POST['NATIONALITY'];
    $NATIONAL_ID = $_POST['NATIONAL_ID'];
    $EMAIL = $_POST['EMAIL'];
    $PRESENT_ADDRESS = $_POST['PRESENT_ADDRESS'];
    $PERMANENT_ADDRESS = $_POST['PERMANENT_ADDRESS'];   
    $LEVEL = $_POST['LEVEL'];
    $FIELD = $_POST['FIELD'];
    $PROGRAM_INTEREST = $_POST['PROGRAM_INTEREST'];
    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "INSERT INTO `application`(`APPLICANT_NAME`,`FATHER_NAME`,`MOTHER_NAME`,`DATE_OF_BIRTH`, `MOBILE`,`GENDER`, `RELIGION`, `BLOOD_GROUP`, `NATIONALITY`, `NATIONAL_ID`, `EMAIL`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`,`LEVEL`,`FIELD`, `PROGRAM_INTEREST`)
            VALUES('$APPLICANT_NAME','$FATHER_NAME','$MOTHER_NAME','$DATE_OF_BIRTH', '$MOBILE','$GENDER','$RELIGION', ' $BLOOD_GROUP', '$NATIONALITY', '$NATIONAL_ID','$EMAIL', '$PRESENT_ADDRESS', '$PERMANENT_ADDRESS','$LEVEL', '$FIELD', '$PROGRAM_INTEREST')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: index.php");
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


    <h1 style="background-image: url(assets/img/backgrounds/1.jpg); 
      color: #ffff; height: 150px;
      top: 10px;"> <br> APPLICATION
    </h1>

    <!-- ////////////////////////////////////////// -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 well">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Application for Admission into
                            <font color="blue">Aims Ghana</font>
                            <font color="blue">Training Services</font> - January 2023 Intake</h4>
                    </div>
                    <div class="panel-body">
                        <form action="form.php" method="POST" class="form-horizontal row">
                            <div class="form-group">
                                <label for="applicant_name" class="control-label col-sm-3">Applicant's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="APPLICANT_NAME" id="applicant_name" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="father_name" class="control-label col-sm-3">Father's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="FATHER_NAME" id="father_name" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mother_name" class="control-label col-sm-3">Mother's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="MOTHER_NAME" id="mother_name" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth" class="control-label col-sm-3">Date of Birth :</label>
                                <div class="col-sm-2">
                                    <!-- <select name="date_day" id="date_of_birth" class="form-control">
                                        <option selected disabled value="">Day</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <span class="help-inline"></span>
                                </div>
                                <div class="col-sm-2">
                                    <select name="date_month" class="form-control">
                                        <option selected disabled value="">Month</option>
                                        <option value="01">01 - January</option>
                                        <option value="02">02 - February</option>
                                        <option value="03">03 - March</option>
                                        <option value="04">04 - April</option>
                                        <option value="05">05 - May</option>
                                        <option value="06">06 - June</option>
                                        <option value="07">07 - July</option>
                                        <option value="08">08 - August</option>
                                        <option value="09">09 - September</option>
                                        <option value="10">10 - October</option>
                                        <option value="11">11 - November</option>
                                        <option value="12">12 - December</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="date_year" class="form-control">
                                        <option disabled selected value="">Year</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                    </select> -->
                                    <input class="form-group " type="date" name="DATE_OF_BIRTH"
                                        style="width: 400px; margin-left: 3px;" required>
                                </div>
                            </div>

                            <div class=" form-group">
                                <label class="control-label col-sm-3" for="mobile">Mobile :</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">+233</span>
                                        <input type="text" name="MOBILE" class="form-control" id="mobile" maxlength="10"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="control-label col-sm-3">Gender :</label>
                                <div class="col-sm-2">
                                    <select name="GENDER" id="gender" class="form-control" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                                <label for="religion" class="control-label col-sm-2">Religion :</label>
                                <div class="col-sm-3">
                                    <select name="RELIGION" id="religion" class="form-control" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="BLOOD_GROUP" class="control-label col-sm-3">Blood Group :</label>
                                <div class="col-sm-2">
                                    <select name="BLOOD_GROUP" id="blood_group" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <label for="nationality" class="control-label col-sm-2">Nationality :</label>
                                <div class="col-sm-3">
                                    <select name="NATIONALITY" id="nationality" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="BANGLADESHI" selected>Ghanaian</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="national_id" class="control-label col-sm-3">National ID :</label>
                                <div class="col-sm-6">
                                    <input type="text" name="NATIONAL_ID" id="national_id" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label col-sm-3">Email :</label>
                                <div class="col-sm-6">
                                    <input type="email" name="EMAIL" id="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="present_address" class="control-label col-sm-3">Present Address
                                    :</label>
                                <div class="col-sm-7">
                                    <textarea name="PRESENT_ADDRESS" rows="3" id="present_address" class="form-control"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="permanent_address" class="control-label col-sm-3">Permanent Address
                                    :</label>
                                <div class="col-sm-7">
                                    <textarea name="PERMANENT_ADDRESS" id="permanent_address" rows="3"
                                        class="form-control" required></textarea>
                                </div>
                            </div>
                            <hr>
                            <fieldset>
                                <legend class="text-center">Academic Qualifications</legend>
                                <!-- ************ Start of SSC and HSC************** -->
                                <div class="row">
                                    <!-- ************ Start of SSC ************** -->
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title text-center">Level Of Education</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="ssc_exam_type" class="control-label col-sm-4">Level
                                                        :</label>
                                                    <div class="col-sm-8">
                                                        <select name="LEVEL" id="ssc_exam_type" class="form-control"
                                                            required>
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="Basic School">Basic School</option>
                                                            <option value="Junior High">Junior High</option>
                                                            <option value="Senior High">Senior High</option>
                                                            <option value="Undergraduate">Undergraduate</option>
                                                            <option value="Higher">Higher</option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="ssc_group" class="control-label col-sm-4">Field
                                                        :</label>
                                                    <div class="col-sm-8">
                                                        <select name="FIELD" id="ssc_group" class="form-control"
                                                            required>
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="SCIENCE">Science</option>
                                                            <option value="HUMANITIES">Humanities</option>
                                                            <option value="BUSINESS STUDIES">Business Studies
                                                            </option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************ End of SSC ************** -->

                                    <!-- ************ Start of HSC ************** -->
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title text-center">Program of Interest*</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="hsc_exam_type" class="control-label col-sm-4">Programs
                                                        :</label>
                                                    <div class="col-sm-8">
                                                        <select name="PROGRAM_INTEREST" id="hsc_exam_type"
                                                            class="form-control" required>
                                                            <option selected disabled value="">Select One</option>
                                                            <optgroup label="Earth Moving Equipment Training">
                                                                <option value="Mobile Crane Operator training">
                                                                    Mobile
                                                                    Crane Operator training</option>
                                                                <option value="Excavator Operator training">
                                                                    Excavator
                                                                    Operator training</option>
                                                                <option value="B.SC (Textile Engineering)">Forklift
                                                                    Operator training</option>
                                                                <option value="Grader Operator training">Grader
                                                                    Operator
                                                                    training</option>
                                                                <option value="Wheel loader Operator training">Wheel
                                                                    loader Operator training</option>
                                                                <option value="Bull Dozer Operator training">Bull
                                                                    Dozer
                                                                    Operator training</option>
                                                            </optgroup>

                                                            <optgroup label="Artisanal Training">
                                                                <option value="Metal Works">Metal Works</option>
                                                                <option value="Civil Works">Civil Works</option>
                                                                <option value="Electricals and Electronics">
                                                                    Electricals
                                                                    and Electronics</option>
                                                                <option value="Mechanics">Mechanics</option>
                                                            </optgroup>

                                                            <optgroup label="Safety Training">

                                                                <option value="First-Aid and Basic Life Support">
                                                                    First-Aid and Basic Life Support</option>
                                                                <option value="Occupational Health and Safety ">
                                                                    Occupational Health and Safety </option>
                                                                <option value="Firefighting and Fire Management">
                                                                    Firefighting and Fire Management</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************ End of HSC ************** -->

                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="checkbox">
                                                    <label class="text-warning">
                                                        <input type="checkbox" id="all_correct" name="all_correct"
                                                            value="1"> I hereby
                                                        declare
                                                        that all the above information are correct and assure that I
                                                        will abide by all the
                                                        rules.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-lg-offset-5">
                                                <button type="submit" class="btn btn-success btn-lg btn-block"
                                                    value="Submit"> Submit</button>
                                            </div>
                                        </div>
                                    </div>

                            </fieldset>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    </div>

    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    
    $EMAIL = $_POST['EMAIL'];
    $SUBJECT = $_POST['SUBJECT'];
    
    $MESSAGE = $_POST['MESSAGE'];



    $sql = "INSERT INTO `contact`(`EMAIL`, `SUBJECT`,  `MESSAGE`) VALUES('$EMAIL','$SUBJECT','$MESSAGE')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
    } else {
        die(mysqli_error(($conn)));
    }
}

?>


    <!-- Footer -->
    <footer class="footer-container">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 footer-left">
                    <h3>Contact us</h3>
                    <div class="contact-form">
                        <form role="form" action="contact.php" method="post">
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>