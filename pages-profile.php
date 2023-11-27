<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $APPLICANT_NAME = $_POST['NAME'];
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];
    $TELE_PHONE = $_POST['TELE_PHONE'];
    $POSITION = $_POST['POSITION'];
    $COUNTRY = $_POST['COUNTRY'];
    // $PICTURE = $_POST['PICTURE'];
    $PICTURE = addslashes(file_get_contents($_FILES["PICTURE"]["tmp_name"]));







    $sql = "UPDATE `profile` SET `NAME`='$APPLICANT_NAME',`EMAIL`='$EMAIL',`PASSWORD`='$PASSWORD',`TELE_PHONE`='$TELE_PHONE',`POSITION`='$POSITION',`COUNTRY`='$COUNTRY',`PICTURE`='$PICTURE',`ID`=1 WHERE ID=1";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: index.php");
    } else {
        die(mysqli_error(($conn)));
    }
}
?>
<?php

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
</head>
<Style>
.profile-pic {
    width: 200px;
    max-height: 200px;
    display: inline-block;
}

.file-upload {
    display: none;
}

.circle {
    border-radius: 100% !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    position: absolute;
    top: 45px;
    left: 250px;
}

img {
    max-width: 100%;
    height: auto;
}

.p-image {
    position: absolute;
    top: 167px;
    right: 30px;
    color: #666666;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}

.p-image:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}

.upload-button {
    font-size: 1.2em;
}

.upload-button:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    color: #999;
}
</Style>

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

                        <!-- Light Logo text -->
                        <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
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
                                while ($row = mysqli_fetch_array($resut)) {
                                    echo '
                                         
                                             <img src="data:PICTURE/jpeg;base64,' . base64_encode($row['PICTURE']) . '"
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
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.php" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu"></span>Application</a></li>
                        <li> <a class="waves-effect waves-dark" href="map-google.php" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu"></span>Explore</a></li>
                        <li> <a class="waves-effect waves-dark" href="sms.php" aria-expanded="false"><i
                                    class="fa fa-comment"></i><span class="hide-menu"></span>Message</a></li>
                        <div class="text-center m-t-30">
                            <a href="#" class="btn waves-effect waves-light btn-success hidden-md-down">Sign Out</a>
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
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Sign Out</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="small-12 medium-2 large-2 columns">
                                        <div class="circle">
                                            <!-- <img class="profile-pic"
                                                src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"> -->
                                            <?php
                                            include "connect.php";
                                            $query = "SELECT `PICTURE` FROM `profile`";
                                            $resut = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($resut)) {
                                                echo '
                                         
                                             <img src="data:PICTURE/jpeg;base64,' . base64_encode($row['PICTURE']) . '"
                                                 height="100" width="100" class="rounded-circle" />
                                         
                                             ';
                                            }
                                            ?>
                                        </div>
                                        <div class="p-image">
                                            <!-- <i class="fa fa-camera upload-button"></i>
                                            <input class="file-upload" type="file" accept="image/*" /> -->


                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title m-t-10">
                                    <?php
                                    include "connect.php";
                                    $query = "SELECT `NAME` FROM `profile` where ID=1";
                                    $resul = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($resul)){
                                        $queried_name = $row["NAME"];
                                     echo 'Name:  '. $queried_name;
                                     }
                                   
                                    ?> </h4>
                                <h6 class="card-subtitle">
                                    <?php
                                    include "connect.php";
                                    $query = "SELECT `POSITION` FROM `profile` where ID=1";
                                    $resul = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($resul)){
                                        $queried_name = $row["POSITION"];
                                     echo 'Position:  '. $queried_name;
                                     }
                                   
                                    ?></h6>
                                <?php
                                // include"connect.php";
                                //  $query = "SELECT `PICTURE`FROM `profile`";  
                                //  $resut = mysqli_query($conn, $query);  
                                //  while($row = mysqli_fetch_array($resut))
                                //  {
                                //  echo '

                                //  <img src="data:PICTURE/jpeg;base64,'.base64_encode($row['PICTURE'] ).'"
                                //      height="100" width="100" class="rounded-circle" />

                                //  ';
                                //  }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="pages-profile.php"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="NAME" placeholder="Prosper Atiah Nsohlebna"
                                                class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="myemail@admin.com"
                                                class="form-control form-control-line" name="EMAIL" id="example-email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="PASSWORD" placeholder="password"
                                                class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="TELE_PHONE" placeholder="123 456 7890"
                                                class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Position</label>
                                        <div class="col-md-12">
                                            <input type="text" name="POSITION" placeholder="Position..."
                                                class="form-control form-control-line" required>
                                        </div>
                                    </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line" name="COUNTRY" required>
                                        <option>Ghana</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file_upload" type="file" accept="image/*" name="PICTURE" id="PICTURE"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success" id="insert"> Update
                                        Profile</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    <footer class="footer">
        © 2023 @aimsGhana. All rights reserved.</a>
    </footer>
    </div>
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
    <script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
    </script>
</body>
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#PICTURE').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#PICTURE').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File');
                $('#PICTURE').val('');
                return false;
            }
        }
    });
});
</script>

</html>

<button script="action"></button>

<script>
$document.actionlistener();
</script>