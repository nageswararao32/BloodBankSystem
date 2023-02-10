<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>HospAterLogin</title>

    <style>
table, th, td {
    border: 2px solid black;
    padding:10px 20px 10px 20px;
    margin-left:300px ;
}

.container-row{
    margin-top : 200px;
    margin-left : 50px;
    text-align:center;
}


</style>
   

</head>
<body>

<nav class="navbar navbar-light bg-primary fixed-top">
<div class="container-fluid">
<a href="Home.php"><img src="https://th.bing.com/th/id/OIP.PiQLewWzWEnC1RzHLGJIrQHaHa?w=217&h=218&c=7&r=0&o=5&dpr=1.5&pid=1.7" style="width: 80px; height: 80px; border-radius:50px;"></a> 
<a class="navbar-brand" href="Home.php" style="color:orange;">Home</a>  
<a class="navbar-brand" href="AddBloodInfo.php" style="color:orange;">AddBloodInfo</a>
<a class="navbar-brand" href="ViewReq.php" style="color:orange;">View Requests</a> 
</div>  
</nav>



<div class="container-row">
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "hospital_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, FullName, Gender, Age, Phone, ReqBloodSample FROM reqsample_datails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>FullName</th><th>Gender</th><th>Age</th><th>Phone</th><th>ReqBloodSample</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["FullName"].  "</td><td>" . $row["Gender"].  "</td><td>" . $row["Age"].  "</td><td>" . $row["Phone"].  "</td><td>" . $row["ReqBloodSample"].  "</td></tr>";
       
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>





</body>
</html>




