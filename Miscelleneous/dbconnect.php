<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass="*Maleekbaryor07"; //SQL Password
$dbname="login_system"; //SQL Database Name
//Connect your database
$con = mysqli_connect($host, $user, $pass, $dbname);
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>