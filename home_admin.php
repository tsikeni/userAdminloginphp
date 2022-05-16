<?php
session_start();

// check if the user is logged in
if(!isset($_SESSION['user'])){
    die("You are not logged in yet");// if you haven't logged in, don't continue
}

//check the user
if($_SESSION['level']!="Admin"){
    die("You are not an admin");// if not admin do not proceed
}
?>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Welcome...!</h2>
<?=$_SESSION['name']?><a href="logout.php">Log Out</a></td>
</tr>
</body>
</html>