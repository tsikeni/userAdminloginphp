
<?php
$connection = mysqli_connect("localhost","root","", "level");
        if (!$connection){
        echo ("connection to Database  !");
        }
        else{
        echo ("Database Connected<br><br><br>");
        }
        echo var_dump($connection);
?>