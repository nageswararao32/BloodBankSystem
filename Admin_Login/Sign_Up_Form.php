<?php include('Posting_SUF.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUpForm</title>
  <style>
   body{
    background-color: gray;
   }

   div{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: rgb(255, 0, 242);
   }

   
   form{
    background-color:papayawhip;
    border-radius: 20px;
    height: 100%;
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
    margin-left: 150%;
    
   }

   input{
    border-radius: 20px;
   }

   
  </style>
</head>
<body>
  <div>
  <h2>Sign Up Form</h2>
  </div>
    
    <form   action="Insert.php" method="POST" >
      <table>
        
        <tr>
          <td>FullName:</td>
          <td><input type="text" name="FullName"  required="" /></td>
        </tr>

        <tr>
          <td>Email:</td>
          <td><input type="email" name="Email"  required="" /></td>
        </tr>

        <tr>
          <td>Password:</td>
          <td><input type="password" name="Password"  required="" /></td>
        </tr>

        <tr>
          <td>DOB:</td>
          <td><input type="date" name="DOB"  required="" /></td>
        </tr>

       
        <tr>
          <td>Gender:</td>
          <td><input type="radio" name="gender" value="Male" />Male</td>
          <td><input type="radio" name="gender"  value="Female"/>Female</td>
          <td><input type="radio" name="gender"  value="Others"/>Others</td>
        </tr>
        


        <tr>
          <td>
          <input  name="submit" id ="btn" type="submit" />
          </td>
        </tr>


      </table>
    </form>



  
</body>
</html>   