<?php session_start();

include "validate.php";

$uname = $pwd = "";

$uname = test_input($_POST['uname']);
$pwd = test_input($_POST['pwd']);
 
if (!empty($uname) && !empty($pwd)) {
    if ($pwd === "letmein") {
        $_SESSION['user'] = $uname;
        header("location: index.php");
	exit;
    }
}
?>
<!--<p>Basically, the code below displays to the user if the credentials are wrong.</p>-->
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.
        
        <a href="index.php">Main Menu</a>
    </body>
</html>
