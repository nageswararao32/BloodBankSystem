<?php
include_once 'Posting_SUF.php';
if(isset($_POST['submit']))
{	 
	 $FullName = $_POST['FullName'];
	 $Email = $_POST['Email'];
	 $Password = $_POST['Password'];
	 $DOB = $_POST['DOB'];
     $gender = $_POST['gender'];
     $sql="INSERT INTO `new_details`(`FullName`, `Email`, `Password`, `DOB`, `Gender`) 
     VALUES ('$FullName','$Email','$Password','$DOB','$gender')";
	 if (mysqli_query($conn, $sql)) {
		echo "New User Registred successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location:Welcome.php");
}

?>