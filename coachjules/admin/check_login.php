<?php
$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password
$errMsg ='';
if(isset($username, $password)) {
    ob_start();
    include_once('config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM login_admin WHERE user_name='$myusername' and user_pass=('$mypassword')";
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        session_name("admin");
        session_Start();
        $_SESSION['name']= $myusername;
        $_SESSION['log'] = "Barack";
        header("location:admin.php");
    }
    else {
        $errMsg = "Wrong Username or Password. Please retry";
        header("location:login.php?msg=$errMsg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Please enter some username and password");
}
?>