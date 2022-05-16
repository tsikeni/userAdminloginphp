<?php

session_start();
//check if the user is logged in

if(!isset($_SESSION['user'])){
    die("You are not logged in yet");//if you haven't logged in, don't continue
}
//check level user
if($_SESSION['level']!="user"){
    die("You Not User..!");//if not admin do not proceed
}
?>
<html>
<head>
<title>Check Login</title>
</head>
<body>
<br>
<h2>Hi...!</h2>
<?=$_SESSION['name']?><a href="logout.php">Log Out</a></td>

</body>
</html>