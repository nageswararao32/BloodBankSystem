<?php
$SERVER="localhost";
$user="root";
$pass="";
$db="register details";
$sqlDb=mysqli_connect($SERVER,$user,$pass,$db)or die("Failed to query database".MYSQLI_ERROR());
      if($sqlDb)
      {
    session_start();
    $error = "";
        if ($_SERVER["GET_METHOD"] == "POST") {
            $Username= ($_GET['Username']);
            $Username= mysqli_real_escape_string($sqlDb, $_GET['Name']);
            $Password = mysqli_real_escape_string($sqlDb, $_GET['Email']);
            