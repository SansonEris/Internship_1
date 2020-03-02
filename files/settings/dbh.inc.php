<?php
    $servername ="localhost";
    $dBUsername ="frenchtotakeaway";
    $dBPassword = "";
    $dBName ="my_frenchtotakeaway";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }