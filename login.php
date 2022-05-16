<?php
session_start();
include "connection.php";
$user = $_POST['user'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysqli_query($connection, "SELECT * FROM login WHERE user='$user' AND password='$password'");
    if(mysqli_num_rows($sql)==1){//if successful will be worth 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['user'] = $qry['user'];
        $_SESSION['name'] = $qry['name'];
        $_SESSION['level'] = $qry['level'];
        if($qry['level']=="Admin"){
            header("location:home_admin.php");
        }else if($qry['level']=="user"){
            header("location:home_user.php");
        }
    }else{
        echo var_dump($sql);  
    }
}else if($op=="out"){
    unset($_SESSION['user']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>
