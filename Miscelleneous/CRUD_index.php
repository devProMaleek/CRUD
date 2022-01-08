<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
}
.container{
    margin-top:300px;
    margin-left:550px;
}
h4{
    margin-left:30px;
}
.back{
    margin-left:155px;
}
input[type="button"]{
    background-color:blue;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
    border-radius:8px;
}
input[type="button"]:hover{
    background-color:rgba(6, 6, 211, 0.5);
    
}
</style>
</head>
<body>
<?php include('dbconnection.php');?>
<div class='container'>
    <h1>Thank you for submitting 😉</h1>
    <h4>Your name has been added to our database 👍</h4>
    <div class="back">
            <a href="CRUD_cheth_form.php">
            <input type="button" name="back" value="Back" >
            </a>
        </div>
</div>
</body>
</html>