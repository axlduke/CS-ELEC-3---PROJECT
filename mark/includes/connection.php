<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
       die("Connection failed: " . mysqli_connect_error());
    }
?>