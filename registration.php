<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";

$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    
    // Validate username
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter a username.";
    } 
	else
	{
        // Prepare a select statement
        $sql = "SELECT id FROM register WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $email = $_POST["email"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $aadhaar = $_POST["aadhaar"];
        $mobile = $_POST["mobile"];
        $amobile = $_POST["amobile"];
        $address = $_POST["address"];
        $district = $_POST["district"];
        $state = $_POST["state"];
        $nation = $_POST["nation"];
        $pin = $_POST["pin"];
        // Prepare an insert statement
        $sql = "INSERT INTO register (username, password, email, firstname, lastname, aadhaar, mobile, amobile, address, district, state, nation, pin) 
                VALUES (?, ?, '$email', '$firstname', '$lastname', '$aadhaar', '$mobile', '$amobile', '$address', '$district', '$state', '$nation', '$pin')";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                // echo "<script>alert('You have successfully registered to our website')</script>";
                header("location: landing.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <center>
    <div class="reg-container">
        <div class="reg-title">Registration</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="reg- details">
                <p>Please fill this form to create an account</p>
                 
                <div class="reg-box">
                    <input placeholder="Username" name="username" class="input-field">
                <span class="help-block"><?php echo $username_err; ?></span>
             

                
				<input type="password" placeholder="Password" name="password" class="input-field">
                <span class="help-block"><?php echo $password_err; ?></span>

                
				<input type="password" placeholder="Confirm Password" name="confirm_password" class="input-field">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>

                
                    <input type="email" placeholder="Email"name="email"  required>
                 
                    <input type="text" placeholder="Fist Name" name="firstname" required>
                 
                    <input type="text" placeholder="Last Name" name="lastname" >
                 
                    <input type="number" placeholder="Mobile Number"name="mobile" >
                 
                    <input type="int" placeholder="Another Mobile Number" name="amobile">
                
                    <input type="text" placeholder="District" name="district" >
                 
                    <input type="text" placeholder="State"name="state">
                
                    <input type="text" placeholder="Nationality" name="nation">
                
                    <input type="number" placeholder="Pincode" name="pin">
                </div>
            <div class="button">
                <input type="submit" value="Submit" onclick="myFunction()">
                <input type="reset" value="Reset">
                <h5>Already have an account<a href="landing.php">Login here</a></h5>
            </div>
        </div>
        </form>
     </center>
    </div>
    <script>
        function myFunction(){
            alert("You have been submitted successfully");
        }
    </script>
</body>
</html>