<?php
 
//include connection file
include('dbconnection.php');
 
$emp_id = null;
 
if(!empty($_GET['emp_id'])){
    $emp_id = $_REQUEST['emp_id'];
}
 
if ( null==$emp_id ) {
    header("Location: CRUD_Landing_page.php");
}
 
$sql_query = "SELECT * FROM employee_details WHERE emp_id=".$emp_id;
$data = mysqli_query($con, $sql_query );
$row = mysqli_fetch_assoc($data);
 
// Define variables and initializes with empty values
$FirstnameError = $LastnameError = $PhonecontactError = $emailError = $genderError = $homeaddressError =  $deptnameError  = null;
$Firstname = $row['First_name'];
$Lastname = $row['Last_name'];
$Phonecontact = $row['Phone_Contact'];
$email = $row['Email_address'];
$gender = $row['Gender'];
$homeaddress = $row['Home_Address'];
$deptname = $row['Dept_name'];
 
 
//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //validate First name
    if(empty($_POST['fname'])){
        $FirstnameError = "Please enter your first name.";
    }else{
        $Firstname = trim($_POST['fname']);
    }
    
    //validate Last name
    if(empty($_POST['lname'])){
        $LastnameError = "Please enter your last name.";
    }else{
        $Lastname = trim($_POST['lname']);
    }

    //validate Phone Contact
    if(empty($_POST['contact'])){
        $PhonecontactError = "Please enter your phone contact.";
    }else{
        $Phonecontact = trim($_POST['contact']);
    }

    //validate email
    if(empty($_POST['email'])){
        $emailError = "Please enter your email.";
    }else{
        $email = trim($_POST['email']);
    }
 
    //validate gender
    if(empty($_POST['gender'])){
        $genderError = "Please enter your email.";
    }else{
        $gender = trim($_POST['gender']);
    }

    //validate homeaddress
    if(empty($_POST['homeaddress'])){
        $homeaddressError = "Please enter your home address";
    }else{
        $homeaddress = trim($_POST['homeaddress']);
    }

    //validate Dept name
    if(empty($_POST['Department'])){
        $deptnameError = "Please select your department name.";
    }else{
        $deptname = trim($_POST['Department']);
    }
  
 
    //checking input errors before inserting in database
    if(empty($FirstnameError) && empty($LastnameError) && empty($PhonecontactError) && empty($emailError) && empty($genderError) && empty($homeaddressError) && empty($deptnameError) ){
        //Prepare an update statement
        $sql = "UPDATE employee_details set First_name='".$Firstname."', Last_name='".$Lastname."', Phone_Contact='".$Phonecontact."', Email_address='".$email."', Gender='".$gender."', Home_Address='".$homeaddress."', Dept_name='".$deptname."' WHERE emp_id='".$emp_id."' ";
        $query = mysqli_query($con, $sql);
 
        if($query){
            header("Location: CRUD_Landing_page.php");
        }
 
    }
 
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
}
.rows:hover{
    background-color:rgb(202, 75, 75);

}
</style>
</head>
<body>
<div class="rows">
    <p style="position: absolute; right:0; padding: 15px;">
        <a href="Logout_page.php" class="btn btn-danger">Logout</a>
    </p>
</div>

<div class="container">
    <div class="row">
        <h3>Update a Staff Details.</h3>
    </div>
 
    <form action="CRUD_update_page.php?emp_id=<?php echo $emp_id;?>" method="POST" class="form-horizontal">
        <div class="form-group <?php echo !empty($FirstnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="fname">First Name:</label>
            <div class="col-sm-10">
                <input name="fname" class="form-control" type="text" placeholder="First name" value="<?php echo !empty($Firstname) ? $Firstname : ''; ?>">
                <?php
                if(!empty($FirstnameError)){
                    ?>
                    <span class="help-inline"><?php echo $FirstnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>
 
        <div class="form-group <?php echo !empty($LastnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="lname">Last Name:</label>
            <div class="col-sm-10">
                <input name="lname" class="form-control" type="text" placeholder="Last name" value="<?php echo !empty($Lastname) ? $Lastname : ''; ?>">
                <?php
                if(!empty($LastnameError)){
                    ?>
                    <span class="help-inline"><?php echo $LastnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($PhonecontactError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="contact">Phone Contact</label>
            <div class="col-sm-10">
                <input name="contact" class="form-control" type="text" placeholder="09039561875" value="<?php echo !empty($Phonecontact) ? $Phonecontact : ''; ?>">
                <?php
                if(!empty($PhonecontactError)){
                    ?>
                    <span class="help-inline"><?php echo $PhonecontactError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($emailError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="email">Email Address</label>
            <div class="col-sm-10">
                <input name="email" class="form-control" type="email" placeholder="Email" value="<?php echo !empty($email) ? $email : ''; ?>">
                <?php
                if(!empty($emailError)){
                    ?>
                    <span class="help-inline"><?php echo $emailError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group <?php echo !empty($genderError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="gender">Gender</label>
            <div class="col-sm-10">
                <input type="radio" id="gender" name="gender" value="Male" required> 
                <label for="Male">Male </label>
                <input type="radio" id="gender" name="gender" value="Female" required> 
                <label for="female">Female </label><br>
                <?php
                if(!empty($genderError)){
                    ?>
                    <span class="help-inline"><?php echo $genderError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($homeaddressError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="homeaddress">Home Address:</label>
            <div class="col-sm-10">
                <input name="homeaddress" class="form-control" type="text" placeholder="Home Address" value="<?php echo !empty($homeaddress) ? $homeaddress : ''; ?>">
                <?php
                if(!empty($homeaddressError)){
                    ?>
                    <span class="help-inline"><?php echo $homeaddressError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($deptnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="Department">Department Name:</label>
            <div class="col-sm-10">
                <input name="Department" class="form-control" type="text" placeholder="Department" value="<?php echo !empty($deptname) ? $deptname : ''; ?>">
                <?php
                if(!empty($deptnameError)){
                    ?>
                    <span class="help-inline"><?php echo $deptnameError; ?></span>
                    <?php
                }
                ?>
            </div>
            
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn btn-danger" href="CRUD_Landing_page.php">Back</a>
            </div>
        </div>
 
    </form>
</div>
<?php mysqli_close($con);?>
</body>
</html>