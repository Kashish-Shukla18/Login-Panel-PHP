<?php
include("database.php");

if(isset($_POST['save']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "Email Id Already Exists"; 
        exit;
    }

    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    
        $query="INSERT INTO register(First_Name, Last_Name, Email, Password) VALUES ('$first_name', '$last_name', '$email', '".md5($pass)."')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
   
}
?>