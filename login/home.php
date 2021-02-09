<?php session_start(); ?>
<?php
if(isset($_SESSION["user"]) == false)
{
    header("Location:login.php");
}
?>
<?php
echo "this is home";
?>
<html>
<head>
    <title>Home</title>	
</head>
<body>
    <a href="signup.php">click to signup</a>
    <a href="logout.php">click to logout</a>
</body>
</html>