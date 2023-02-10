<?php
include_once 'serverconnec.php';
if(isset($_POST['submit']))
{	 
	
	 $Username = $_POST['Username'];
	 $Password = $_POST['Password'];
	 $query=mysqli_query($conn,"SELECT * FROM hospital_registration_details WHERE Username='".$Username."' AND Password='".$Password."'");
     //$sql="SELECT *FROM hospital_registration_details WHERE Username " = $Username and Password = $Password ;

	 $numrows=mysqli_num_rows($query);  
	 if($numrows!=0)  
	 {  
		/*while($row=mysql_fetch_assoc($query))  
		{  
		$dbusername=$row['Username'];  
		$dbpassword=$row['password'];  
		}  */
		
		session_start();  
		$_SESSION['sess_user']=$user;  
	
		/* Redirect browser */  
		header("Location: HospAftrLog.php");  
   
	} else {  
		echo "Invalid username or password!";  
	}  
}  

?>