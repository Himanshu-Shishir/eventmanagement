<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  header("location: index.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter username.";
    } 
	else
	{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"])))
	{
        $password_err = "Please enter your password.";
    } 
	else
	{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err))
	{
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM register WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
				{                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
					{
                        if(password_verify($password, $hashed_password))
						{
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
								
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        }
						else
						{
                            // Display an error message if password is not valid
                            $password_err = "<script>alert('The password you entered was not valid.')</script>";
                        }
                    }
                } 
				else
				{
                    // Display an error message if username doesn't exist
                    $username_err = "<script>alert('No account found with that username.')</script>";
                }
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!-- Header -->
<?php include "header.php"; ?>
<body>
    <div class="flex-container1">
        <img class="flex-item1" src="062.jfif">
    </div>
    <div class="container">
        <div class="content">
             <?php          
        $sql="SELECT * FROM landingimage WHERE hide=1";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($result)){
            $image=$row['image'];
    ?>
            <div class="slideshow">
                <div class="Slides">
                  <?php echo"<img src='..//admin/landing/".$row['image']."'>"?>
                </div>
            </div><?php } ?>
        </div>
        <div class="content">
            <div class="form-box">
            <h1 style="text-align:center;color:#fff;">Admin/User Login</h1>
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>User</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Admin</button>
                </div>
                <form action="" method="POST" id='login' class='input-group-login'>
                   <input class='input-field'name="username" placeholder='User Name'>
                   <span class="help-block"><?php echo $username_err; ?></span>

                    <input type='password' class='input-field' name="password" placeholder='Enter Password'>
                    <span class="help-block"><?php echo $password_err; ?></span>

                    <center><p><a href="forget.html">Forget Password</a></p>
                    <p>Don't have an account<a href="registration.php">Create Account</a></p></center>
                    <button type='submit' class='submit-btn'>Log in</button>
                </form>
                <form action="admin_login.php" method="POST" id='register' class='input-group-register'>
                <input type='' class='input-field'name="username" placeholder='User Name' required>
                    <input type='password' class='input-field' name="password" placeholder='Enter Password' required>
                   <button type='submit' class='submit-btn'>Login</button>
                </form>
            </div>
        </div>
    </div>
    <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("Slides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>