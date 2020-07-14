<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gen4";

    session_start();
    $mysqli = mysqli_connect($server, $username, $password, $dbname);
?>