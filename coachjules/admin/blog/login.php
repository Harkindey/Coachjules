<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>ADMIN LOGIN</title>
</head>
<body>
<?php
//$_GET['msg'] = "";
    $login_form = <<<EOD
<form name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Username: </label><input type="text" size="20" name="username" id="username"  /></p>
<p><label for="password">Password: </label><input type="password" size="20" name="password" id="password"  /></p>
<p><input type="submit" name="submit" id="submit" value="LOG IN"/> </p>
</form>
EOD;
@$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If message is set echo it
echo "<h1>Please enter your Login Information</h1>";
echo $login_form;
?>
</body>
</html>