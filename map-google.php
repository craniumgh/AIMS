<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    // $PICTURE = addslashes(file_get_contents($_FILES['PICTURES']['tmp_name']));
    $PICTURE = $_POST['PICTURES'];
    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=1,`DATE`='$DATE',`PICTURES`='$PICTURE',`DESCRIPTION`='$DESCRIPTION' WHERE ID=1";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
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
                    <a class="navbar-brand" href="dash.php" style="color: black; font-size: 2em;">Aims
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
                <span><img src="../assets/images/logo-icon.png" style="height: 30px;"
                        alt="elegant admin template"></span>
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
                        <h4 class="text-themecolor">Explore</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Explore</li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><a
                                    href="logout.php">Sign
                                    Out</a>
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
                <div class="container mt-5">
                    <h2>Update Explore Page</h2>

                    <form id="imageUploadForm" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="image1">Image 1:</label>
                            <input type="file" class="form-control-file" id="image1" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date1" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description1" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    // $PICTURE = $_POST['PICTURES'];
    $PICTURE = addslashes(file_get_contents($_FILES["PICTURES"]["tmp_name"]));    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=2,`DATE`='$DATE',`PICTURES`='$PICTURE',`DESCRIPTION`='$DESCRIPTION' WHERE ID=2";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
    } else {
        die(mysqli_error(($conn)));
    }
   
}
?>
                        <div class="form-group">
                            <label for="image2">Image 2:</label>
                            <input type="file" class="form-control-file" id="image2" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date2" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description2" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    // $PICTURE = $_POST['PICTURES'];
    $PICTURE = addslashes(file_get_contents($_FILES["PICTURES"]["tmp_name"]));
    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=3,`DATE`='$DATE',`PICTURES`='$PICTURE',`DESCRIPTION`='$DESCRIPTION' WHERE ID=3";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
    } else {
        die(mysqli_error(($conn)));
    }
   
}
?>
                        <div class="form-group">
                            <label for="image3">Image 3:</label>
                            <input type="file" class="form-control-file" id="image3" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date3" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description3" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $PICTURE = addslashes(file_get_contents($_FILES["PICTURES"]["tmp_name"]));
    // $PICTURE = $_POST['PICTURES'];
    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=4,`DATE`='$DATE',`PICTURES`='$PICTURE',`DESCRIPTION`='$DESCRIPTION' WHERE ID=4";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
    } else {
        die(mysqli_error(($conn)));
    }
   
}
?>
                        <div class="form-group">
                            <label for="image4">Image 4:</label>
                            <input type="file" class="form-control-file" id="image4" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date4" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description4" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $PICTURE = addslashes(file_get_contents($_FILES["PICTURES"]["tmp_name"]));
    // $PICTURE = $_POST['PICTURES'];
    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=5,`DATE`='$DATE',`PICTURES`='$PICTURE',`DESCRIPTION`='$DESCRIPTION' WHERE ID=5";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
    } else {
        die(mysqli_error(($conn)));
    }
   
}
?>
                        <div class="form-group">
                            <label for="image5">Image 5:</label>
                            <input type="file" class="form-control-file" id="image5" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date5" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description5" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $DATE = $_POST['DATE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $PICTURES = addslashes(file_get_contents($_FILES["PICTURES"]["tmp_name"]));

    // $PICTURE = $_POST['PICTURES'];
    

    // $PROGRAM = $_POST['PROGRAM'];






    $sql = "UPDATE `image` SET `ID`=6,`DATE`='$DATE',`PICTURES`='$PICTURES',`DESCRIPTION`='$DESCRIPTION' WHERE ID=6";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " Data inserted";
        header("location: dash.php");
    } else {
        die(mysqli_error(($conn)));
    }
   
}
?>
                        <div class="form-group">
                            <label for="image6">Image 6:</label>
                            <input type="file" class="form-control-file" id="PICTURES" name="PICTURES" accept="image/*">
                            <input type="date" class="form-control" id="date6" name="DATE" placeholder="Date" required>
                            <input type="text" class="form-control" id="description6" name="DESCRIPTION"
                                placeholder="Description" required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="insert" id="insert">Submit</button>
                        <div class="top-big-link wow fadeInUp">
                            <a class="btn btn-link-1" href="explory.php">Get Started Now</a>
                        </div>
                    </form>


                    <div id="imagePreview" class="mt-4">
                        <?php
                                            include "connect.php";
                                            $query = "SELECT `PICTURES` FROM `image` WHERE id= 6";
                                            $result = mysqli_query($conn, $query);
                                            if ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                         
                                             <img src="data:PICTURES/jpeg;base64,'.base64_encode($row['PICTURES']) . '"
                                                 height="100" width="100" class="rounded" />';
                                            }
                                            else {
                                                     echo "No image found.";
                                                 }

                                            // Query the database to retrieve the image
// // Query the database to retrieve the image
// $sql = "SELECT PICTURES FROM image WHERE id = 1";
// $result = mysqli_query($conn, $sql);

// // Check if the query was successful
// if (mysqli_num_rows($result) > 0) {
//     // Fetch the image data as an associative array
//     $row = mysqli_fetch_assoc($result);

//     // Display the image on the web page
//     echo '<img src="data:PICTURES/jpeg;base64,' . base64_encode($row['PICTURES']) . '" />';
// } else {
//     echo "No image found.";
// }

// // Close the database connection
// mysqli_close($conn);
?>


                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <!-- <script>
                document.getElementById("submitBtn").addEventListener("click", function() {
                    // Collect image files, dates, and descriptions
                    const images = [
                        document.getElementById("image1").files[0],
                        document.getElementById("image2").files[0],
                        document.getElementById("image3").files[0],
                        document.getElementById("image4").files[0],
                        document.getElementById("image5").files[0],
                        document.getElementById("image6").files[0]
                    ];
                    const dates = [
                        document.getElementById("date1").value,
                        document.getElementById("date2").value,
                        document.getElementById("date3").value,
                        document.getElementById("date4").value,
                        document.getElementById("date5").value,
                        document.getElementById("date6").value
                    ];
                    const descriptions = [
                        document.getElementById("description1").value,
                        document.getElementById("description2").value,
                        document.getElementById("description3").value,
                        document.getElementById("description4").value,
                        document.getElementById("description5").value,
                        document.getElementById("description6").value
                    ];

                    // Display image previews (you can customize this part)
                    const imagePreview = document.getElementById("imagePreview");
                    imagePreview.innerHTML = "";

                    for (let i = 0; i < images.length; i++) {
                        if (images[i]) {
                            const image = document.createElement("img");
                            image.src = URL.createObjectURL(images[i]);
                            image.style.maxWidth = "100px";
                            image.style.margin = "10px";
                            imagePreview.appendChild(image);

                            // You can also display dates and descriptions here if needed
                            const date = document.createElement("p");
                            date.textContent = "Date: " + dates[i];
                            imagePreview.appendChild(date);

                            const description = document.createElement("p");
                            description.textContent = "Description: " + descriptions[i];
                            imagePreview.appendChild(description);
                        }
                    }
                });
                </script> -->
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
            © 2023 @aimsGhana. All rights reserved.</a>
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
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&sensor=true">
    </script>
    <script src="../assets/node_modules/gmaps/gmaps.min.js"></script>
    <script src="../assets/node_modules/gmaps/jquery.gmaps.js"></script>
</body>
<!-- <script>
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
</script> -->
</body>
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#PICTURES').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#PICTURES').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File');
                $('#PICTURES').val('');
                return false;
            }
        }
    });
});
</script>
<!-- <script>
$document.actionlistener();
</script> -->

</html>