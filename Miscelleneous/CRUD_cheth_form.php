<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
}
.container{
    margin-top:135px;
    margin-left:475px;
    margin-right:475px;
    background-color:rgb(211, 211, 211);

}
.header{
    padding:8px;
    background-color:rgb(6, 6, 211);
}
h3{
    margin-left:163px;
    color:white;
}
form{
    margin-left:150px;
    padding:10px 10px;
}
label{
    font-family:monospace;
}
input{
    padding:4px;
    border-radius:8px;
}
input[type="button"]{
    background-color:blue;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="button"]:hover{
    background-color:rgba(6, 6, 211, 0.5);
    
}
input[type="Reset"]{
    background-color:green;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="Reset"]:hover{
    background-color:rgba(6, 211, 6, 0.5);
}
input[type="submit"]{
    background-color:red;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="submit"]:hover{
    background-color:rgba(211, 6, 6, 0.5);
}
</style>
<body>
<div class="container">
    <div class="header">
        <h3>EMPLOYEE DETAILS</h3>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div <?php echo !empty($FirstnameError)? 'error': ''; ?>>
            <label for="fname">First Name:</label>
            <div>
                <input name="fname"  type="text" placeholder="First name" required size="20">
                <?php
                if(!empty($FirstnameError)){
                    ?>
                    <span><?php echo $FirstnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>
 
        <div <?php echo !empty($LastnameError)? 'error': ''; ?>>
            <label for="lname">Last Name:</label>
            <div>
                <input name="lname" type="text" placeholder="Last name" required size="20">
                <?php
                if(!empty($LastnameError)){
                    ?>
                    <span><?php echo $LastnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div <?php echo !empty($PhonecontactError)? 'error': ''; ?>>
            <label for="contact">Phone Contact</label>
            <div>
                <input name="contact" type="text" placeholder="+2349039561875" required maxlength="20">
                <?php
                if(!empty($PhonecontactError)){
                    ?>
                    <span><?php echo $PhonecontactError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div <?php echo !empty($emailError)? 'error': ''; ?>>
            <label for="email">Email Address</label>
            <div>
                <input name="email" type="email" placeholder="Email" required size="20">
                <?php
                if(!empty($emailError)){
                    ?>
                    <span><?php echo $emailError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div <?php echo !empty($genderError)? 'error': ''; ?>>
            <label for="gender">Gender</label>
            <div>
                <input type="radio" id="gender" name="gender" value="Male" required> 
                <label for="Male">Male </label><br>
                <input type="radio" id="gender" name="gender" value="Female" required> 
                <label for="female">Female </label><br>
                <?php
                if(!empty($genderError)){
                    ?>
                    <span><?php echo $genderError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div <?php echo !empty($homeaddressError)? 'error': ''; ?>>
            <label for="homeaddress">Home Address:</label>
            <div>
                <input name="homeaddress" type="text" placeholder="Home Address" required size="20">
                <?php
                if(!empty($homeaddressError)){
                    ?>
                    <span><?php echo $homeaddressError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div <?php echo !empty($deptnameError)? 'error': ''; ?>>
            <label for="Department">Department Name:</label>
            <div>
                <input name="Department" type="text" placeholder="Department" required size="20">
                <?php
                if(!empty($deptnameError)){
                    ?>
                    <span><?php echo $deptnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div><br>
        <div class="back">
            <input type="submit" name="submit" value="Submit" > 
            <input type="Reset" name="Reset" value="Reset" >
            <a href="CRUD_Home_page.php">
            <input type="button" name="back" value="Back" >
            </a>
        </div>
 
    </form>
</div>
</div>
    
</body>
</html>