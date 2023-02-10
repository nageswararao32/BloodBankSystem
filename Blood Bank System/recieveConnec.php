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
     $BloodGroup = $_POST['BloodGroup'];
	 $Username = $_POST['Username'];
	 $Password = $_POST['Password'];
     $sql="INSERT INTO `reciever_reg_details`(`FullName`, `gender`, `Age`, `Email`, `Phone`, `Address`, `BloodGroup`, `Username`, `Password`) 
     VALUES ('$FullName','$gender','$Age','$Email','$Phone','$Address','$BloodGroup','$Username','$Password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New User Registred successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location:RecieversLogin.php");
}

?>