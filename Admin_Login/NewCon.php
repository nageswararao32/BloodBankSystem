
 
 <?php
      
      $SERVER="localhost";
      $user="root";
      $pass="";
      $db="register details";
      
      $sqlDb=mysqli_connect($SERVER,$user,$pass,$db)or die("Failed to query database".MYSQLI_ERROR());
      if($sqlDb)
      {
        echo "connection is established";
       
      }
      else{
        echo "Could not connect to server";
      }
     ?>








        