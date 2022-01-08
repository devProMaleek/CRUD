<?php
 
//include connection file
include("dbconnection.php");
 
// Define variables and initializes with empty values
$FirstnameError = $LastnameError = $PhonecontactError = $emailError = $genderError = $homeaddressError =  $deptnameError  = "";
$Firstname = $Lastname = $Phonecontact = $email = $gender = $homeaddress  =  $deptname = "";
 
//Processing form data when form is submitted
if(isset($_POST['submit'])){
    echo "Here";
    //validate First name
    if(empty($_REQUEST['fname'])){
        $FirstnameError = "Please enter your first name.";
    }else{
        $Firstname = trim($_REQUEST['fname']);
    }
    
    //validate Last name
    if(empty($_REQUEST['lname'])){
        $LastnameError = "Please enter your last name.";
    }else{
        $Lastname = trim($_REQUEST['lname']);
    }

    //validate Phone Contact
    if(empty($_REQUEST['contact'])){
        $PhonecontactError = "Please enter your phone contact.";
    }else{
        $Phonecontact = trim($_REQUEST['contact']);
    }

    //validate email
    if(empty($_REQUEST['email'])){
        $emailError = "Please enter your email.";
    }else{
        $email = trim($_REQUEST['email']);
    }
 
    //validate gender
    if(empty($_REQUEST['gender'])){
        $genderError = "Please enter your email.";
    }else{
        $gender = trim($_REQUEST['gender']);
    }

    //validate homeaddress
    if(empty($_REQUEST['homeaddress'])){
        $homeaddressError = "Please enter your home address";
    }else{
        $homeaddress = trim($_REQUEST['homeaddress']);
    }

    //validate Dept name
    if(empty($_REQUEST['Department'])){
        $deptnameError = "Please select your department name.";
    }else{
        $deptname = trim($_REQUEST['Department']);
    }
 
  
 
    //checking input errors before inserting in database
    if(empty($FirstnameError) && empty($LastnameError) && empty($PhonecontactError) && empty($emailError) && empty($genderError) && empty($homeaddressError) && empty($deptnameError) ){
        //Prepare an insert statement
        $sql="INSERT INTO employee_details(First_name,Last_name,Phone_Contact,Email_address,Gender,Home_Address,Dept_name) 
                VALUES('".$Firstname."', '".$Lastname."', '".$Phonecontact."', '".$email."', '".$gender."', '".$homeaddress."', '".$deptname."')";
        $query = mysqli_query($con, $sql);
        if(!$query){
            die("DAMMIT");
        }else{ echo "Success";}
        if($query){
            header("Location: CRUD_Landing_page.php");
            exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
 
    }
 
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create CRUD_Create_page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
<div class="container">
    <div class="header">
        <h3>EMPLOYEE DETAILS</h3>
    </div>
    <form action="" method="POST" target="_self">
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