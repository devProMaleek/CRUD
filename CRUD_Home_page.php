<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login_page.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
}
.container{
    margin-top:250px;
    margin-left:470px;
    

}
h1{
    color:white;
    font-size:400%;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, Sans-serif;
}
input:hover{
    background-color:rgb(202, 75, 75);

}
input{
    background-color:red;
    color:white;
    font-size:170%;
    border-radius:8px;
    width:7em;
    margin-left:180px;
    padding: 8px;
    border-radius:8px;
    border:none;
}
h5{
    color:white;
    margin-top:5px;
    margin-left:159px;
}
.row:hover{
    background-color:rgb(202, 75, 75);
}
</style>
</head>
<body>
<div class="row">
    <p style="position: absolute; right:0; padding: 15px;">
        <a href="Logout_page.php" class="btn btn-danger">Logout</a>
    </p>
</div>

<div class="container">
    <h1>WELCOME TO CHETH</h1>
    <div class="cbutton">
        <a href=CRUD_Landing_page.php>
            <input type="button" value="Register"></a>
    </div>
    <h5>Kindly Click the button to Register</h5>
</div>

    
</body>
</html> 