<?php
include "Server";

if (isset($_POST['Username']) && isset($_POST['Password'])) {
    # code...
    function validation($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $Username=validation($_POST['Username']);
    $Password=validation($_POST['Password']);

    if (empty($Username)) {
        # code...
        header("Location:index.php?error=Username is required");
        exit();

    }
    elseif(empty($Password))
    {
        header("Location:index.php?error=Password is required");
        exit();

    }
    else
    {
        $sql="SELECT * FROM Admin_Details WHERE Username='$Username' AND Password='$Password'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rowa($result)==1)
        {
            $row=mysqli_fetch_assoc($result);
        }
    }



}
else{
    header("Location:index.php");
    exit();
}
?>