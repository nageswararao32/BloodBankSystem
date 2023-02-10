

<?php
$host="localhost";
$user="root";
$pass="";
$db="register details";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try
{
    $connect=mysqli_connect($host, $user, $pass, $db);
    echo "Successfully Connected to database!";
}catch(Exception $ex){
    echo "Error";
}

?>

