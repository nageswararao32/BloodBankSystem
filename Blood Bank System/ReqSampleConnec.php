<?php
include_once 'serverconnec.php';
if(isset($_POST['submit']))
{	 
	 $FullName = $_POST['FullName'];
     $gender = $_POST['gender'];
     $Age = $_POST['Age'];
	 $Email = $_POST['Email'];
     $Phone = $_POST['Phone'];
     $Address = $_POST['Address'];
     $ReqBloodSample = $_POST['ReqBloodSample'];
     $sql="INSERT INTO `reqsample_datails`(`FullName`, `gender`, `Age`, `Email`, `Phone`, `Address`, `ReqBloodSample`) 
     VALUES ('$FullName','$gender','$Age','$Email','$Phone','$Address','$ReqBloodSample')";
	 if (mysqli_query($conn, $sql)) {
		echo "New User Registred successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location:welcome.php");
}

?>