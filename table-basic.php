<?php
//   include 'connect.php';
//     //Output Form Entries from the Database
//     $sql = "SELECT `APPLICANT_NAME`,`FATHER_NAME`,`MOTHER_NAME`,`DATE_OF_BIRTH`, `MOBILE`,`GENDER`, `RELIGION`, `BLOOD_GROUP`, `NATIONALITY`, `NATIONAL_ID`, `EMAIL`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`,`LEVEL`,`FIELD`, `PROGRAM_INTEREST` FROM `application`";
//     //fire query
//     $result = mysqli_query($conn, $sql);
//     if(mysqli_num_rows($result) > 0)
//     {
//        echo '<table> <tr> <th>APPLICANT NAME</th> <th>FATHER NAME</th> <th>MOTHER NAME</th><th>DATE OF BIRTH</th><th>MOBILE</th><th>GENDER</th> <th>RELIGION</th> <th>BLOOD GROUP</th> <th>NATIONALITY</th> <th>NATIONAL ID</th><th>EMAIL</th> <th>PRESENT ADDRESS</th> <th>PERMANENT ADDRESS</th><th>LEVEL</th><th>FIELD</th> <th>PROGRAM INTEREST</th> </tr>';
//        while($row = mysqli_fetch_assoc($result)){
//          // to output mysql data in HTML table format
//            echo '<tr > <td>' . $row["APPLICANT_NAME"]. '</td>
//            <td>' . $row["FATHER_NAME"]. '</td>
//            <td>' . $row["MOTHER_NAME"]. '</td>
//           <td>' . $row["DATE_OF_BIRTH"]. '</td>
//            <td>' . $row["MOBILE"]. '</td>
//           <td>' . $row["GENDER"]. '</td>
//             <td>' . $row["RELIGION"]. '</td>
//            <td>' . $row["BLOOD_GROUP"]. '</td>
//            <td>' . $row["NATIONALITY"]. '</td>
//            <td>' . $row["NATIONAL_ID"].'</td>
//           <td>' . $row["EMAIL"]. '</td>
//             <td>' . $row["PRESENT_ADDRESS"]. '</td>
//              <td>' . $row["PERMANENT_ADDRESS"]. '</td>   
//               <td>' . $row["LEVEL"]. '</td>
//               <td>' . $row["FIELD"]. '</td>
//              <td>' . $row["PROGRAM_INTEREST"]. '</td> </tr>';
//        }
//        echo '</table>';
//     }
//     else
//     {
//         echo "0 results";
//     }
//     // closing connection
//     // mysqli_close($conn);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>www.aims/admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="20x20" href="../assets/images/logo-light-icon.png">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <style>
    table {
        width: 70%;
        margin: auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    table,
    tr,
    th,
    td {
        border: 1px solid #d4d4d4;
        border-collapse: collapse;
        padding: 12px;
    }

    th,
    td {
        text-align: left;
        vertical-align: top;
    }

    tr:nth-child(even) {
        background-color: #e7e9eb;
    }
    </style>
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Aims Ghana Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="color: black; font-size: 2em;">Aims
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" width="30"> -->
                                <?php
                                            include "connect.php";
                                             $query = "SELECT `PICTURE`FROM `profile`";  
                                             $resut = mysqli_query($conn, $query);  
                                             while($row = mysqli_fetch_array($resut))
                                             {
                                             echo '
                                         
                                             <img src="data:PICTURE/jpeg;base64,'.base64_encode($row['PICTURE'] ).'"
                                                 height="50" width="50" class="rounded-circle" />
                                         
                                             ';
                                             }
                                            ?>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="../assets/images/logo-icon.png" style="height: 30px;" alt="Aims Gh admin"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                        class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="dash.php" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.php" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu"></span>Application</a></li>
                        <li> <a class="waves-effect waves-dark" href="map-google.php" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu"></span>Explore</a></li>
                        <div class="text-center m-t-30">
                            <a href="logout.php" class="btn waves-effect waves-light btn-success hidden-md-down">Sign
                                Out</a>
                        </div>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Application Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Application Form</li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15">Sign
                                Out<a href="logout.php"></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Application Form</h4>
                                <h6 class="card-subtitle">Applicants <code>.table</code></h6>
                                <div class="table-responsive">
                                    <?php
 include 'connect.php';
     //Output Form Entries from the Database
    $sql = "SELECT `APPLICANT_NAME`,`FATHER_NAME`,`MOTHER_NAME`,`DATE_OF_BIRTH`, `MOBILE`,`GENDER`, `RELIGION`, `BLOOD_GROUP`, `NATIONALITY`, `NATIONAL_ID`, `EMAIL`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`,`LEVEL`,`FIELD`, `PROGRAM_INTEREST` FROM `application`";
     //fire query
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0)
     {
        echo '<table class="table"> <tr> <th>APPLICANT NAME</th> <th>FATHER NAME</th> <th>MOTHER NAME</th><th>DATE OF BIRTH</th><th>MOBILE</th><th>GENDER</th> <th>RELIGION</th> <th>BLOOD GROUP</th> <th>NATIONALITY</th> <th>NATIONAL ID</th><th>EMAIL</th> <th>PRESENT ADDRESS</th> <th>PERMANENT ADDRESS</th><th>LEVEL</th><th>FIELD</th> <th>PROGRAM INTEREST</th> </tr>';
        while($row = mysqli_fetch_assoc($result)){
          // to output mysql data in HTML table format
            echo '<tr style="text-align: center;" > <td>' . $row["APPLICANT_NAME"]. '</td>
            <td>' . $row["FATHER_NAME"]. '</td>
            <td>' . $row["MOTHER_NAME"]. '</td>
           <td>' . $row["DATE_OF_BIRTH"]. '</td>
            <td>' . $row["MOBILE"]. '</td>
           <td>' . $row["GENDER"]. '</td>
             <td>' . $row["RELIGION"]. '</td>
            <td>' . $row["BLOOD_GROUP"]. '</td>
            <td>' . $row["NATIONALITY"]. '</td>
            <td>' . $row["NATIONAL_ID"].'</td>
           <td>' . $row["EMAIL"]. '</td>
             <td>' . $row["PRESENT_ADDRESS"]. '</td>
              <td>' . $row["PERMANENT_ADDRESS"]. '</td>   
               <td>' . $row["LEVEL"]. '</td>
               <td>' . $row["FIELD"]. '</td>
              <td>' . $row["PROGRAM_INTEREST"]. '</td> </tr>';
        }
        echo '</table>';
     }
     else
     {
         echo "0 results";
     }
     // closing connection
     // mysqli_close($conn);

?>
                                    <!-- <table class="table">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>#</th>
                                                <th>Applicant's Name</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Religion</th>
                                                <th>Blood Group</th>
                                                <th>Nationality</th>
                                                <th>National ID</th>
                                                <th>Email</th>
                                                <th>Present Address</th>
                                                <th>Permanent Address</th>
                                                <th>Educational Level</th>
                                                <th>Field</th>
                                                <th>Program Of Interest</th>
                                                <th>Sub-Progam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>Gusikowski</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Joshi</td>
                                                <td>Hickle</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>Genelia</td>
                                                <td>Gen</td>
                                                <td>43533363633</td>
                                                <td>Male</td>
                                                <td>@Genelia</td>
                                                <td>@Genelia</td>
                                                <td>Ghanaian</td>
                                                <td>Gh-5464d-4747f</td>
                                                <td>myemail</td>
                                                <td>Manya</td>
                                                <td>Soe</td>
                                                <td>SHS</td>
                                                <td>Sicence</td>
                                                <td>Safety</td>
                                                <td>FirstAid</td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2023 @aimsGhana. All rights reserved.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>