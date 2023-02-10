<?php
include_once 'serverconnec.php';
if(isset($_POST['submit']))
{	 
	$Name = $_POST['Name'];
     $Age = $_POST['Age'];
     $Phone = $_POST['Phone'];
     $TypeOfBlood = $_POST['TypeOfBlood'];

     $sql="INSERT INTO  add_blood_info (Name,Age, Phone, TypeOfBlood) VALUES('$Name','$Age', '$Phone', '$TypeOfBlood')";  
  
    $result=mysqli_query($conn,$sql);  
     if($result){  
          header("Location:AterAddBloInfo.php");
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
}

?>