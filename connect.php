<?php


    $hostname = 'localhost';
    $Username = 'root';
    $password = '';
    $database = 'aims';



    $conn = new mysqli($hostname, $Username, $password, $database);
    if ($conn) {
        //  echo "connection successful";

        
     }
     else {
        die(mysqli_error(($conn)));
    }
?>