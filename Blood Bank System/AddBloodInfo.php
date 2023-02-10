<?php include('serverconnec.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Add Blood Info Form</title>
  <style>
   body{
    background-color: gray;
   }

   div{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: rgb(255, 0, 242);
    padding: 20px;
   }

   
   form{
    background-color:papayawhip;
    border-radius: 20px;
    height: 250px;
    width: 50%;
    padding: 20px 30px 20px 30px;
    margin-left: 25%;
    font-family:Arial, Helvetica, sans-serif;
  
   }

   #btn{
    border-radius:20px;
    background-color: rgb(0, 255, 13);
    cursor:pointer;
    padding: 10px 20px 10px 20px;
    text-align:center;

    
   }

   input{
    border-radius: 20px;
   }

   
  </style>
</head>
<body>
  <div>
  <h2>Adding Blood Info</h2>
  </div>
    
<form   action="BinfoConnec.php" method="POST" >

  <table>

<tr>
    <td>Name:</td>
    <td><input type="text" name="Name"  required="" /></td>
  </tr>

  <tr>
    <td>Age:</td>
    <td><input type="text" name="Age"  required="" /></td>
  </tr>

  <tr>
    <td>Phone:</td>
    <td><input type="tel" name="Phone"  required="" /></td>
  </tr>


  
  <tr>
    <td>Type of Adding Blood Info:</td>
    <td><input type="text" name="TypeOfBlood" required="" /></td>
  </tr>



</table>

<div>
<input  name="submit" id ="btn" type="submit" />
</div>

 </form>

    

  
</body>
</html> 



