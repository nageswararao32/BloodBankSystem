<?php 

    $SERVER="localhost";
      $user="root";
      $pass="";
      $db="register details";
      
      $sqlDb=mysqli_connect($SERVER,$user,$pass,$db)or die("Failed to query database".MYSQLI_ERROR());
      if($sqlDb)
      {
    session_start();
    $error = "";
        //Taking HTML Form Data from User
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Name = ($_POST['Name']);
        $Name = mysqli_real_escape_string($sqlDb, $_POST['Name']);
        $Email = mysqli_real_escape_string($sqlDb, $_POST['Email']);
        $Phone = mysqli_real_escape_string($sqlDb,  $_POST['Phone']); 
        $Address = mysqli_real_escape_string($sqlDb,  $_POST['Address']); 
        
        // PHP form validation PHP code
        if (!$Name) {
        $error .= "Name is required <br>";
        }
        if (!$Email) {
            $error .= "Email is required <br>";
        }
        if (!$Phone) {
            $error .= "Phone number is required <br>";
        } 
        if (!$Address) {
            $error .= "Adress is required <br>";
        } 
        if ($error) {
            $error = "<b>There were error(s) in your form!</b> <br>".$error;
        }  else {
        
            //Check if email is already exist in the Database
    
            $query = "SELECT id FROM additional_users WHERE Email = '$Email'";
            $result = mysqli_query($sqlDb, $query);
            if (mysqli_num_rows($result) > 1) {
                $error .="<p>Your email has taken already!</p>";
            } else {
    
            
                $query = "INSERT INTO additional_users (Name, Email, Phone,Address) VALUES ('$Name', '$Email', '$Phone','$Address')";
                
                if (!mysqli_query($sqlDb, $query)){
                    $error ="<p>Could not sign you up - please try again.</p>";
                    } else {
    
                        //session variables to keep user logged in
                    $_SESSION['id'] = mysqli_insert_id($sqlDb);  
                    $_SESSION['Name'] = $Name;
    
                    //Setcookie function to keep user logged in for long time
                    if ($_POST['stayLoggedIn'] == '1') {
                    setcookie('id', mysqli_insert_id($sqlDb), time() + 60*60*365);
                  
                    }
                    
                    echo "Registerd Successfully!";
                    header("Location:SignUp.php");  
                
                    }
                
                }
    
            }  
        }
    }
    else{
      echo "Could not connect to server";
    }
 

?>