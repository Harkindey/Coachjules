<?php
require '../app/start.php';
$username = $_POST['uname'];
     $password = $_POST['pwd'];
     
 if (isset($username, $password)){
    ob_start();
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    
    

     $bean = "SELECT * FROM login_admin WHERE user_name='$myusername' and user_pass=('$mypassword')";
     $result = mysqli_query($dbC, $bean);
     $count = mysqli_num_rows($result);
     if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        session_name("admin");
        session_Start();
        $_SESSION['log'] = "Barack";
        header("location:index.php");
    }
    
 ob_end_flush();
 }