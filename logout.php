<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: landing.php");
    exit;
}
?>

<?php
// Initialize the session
session_start(); 
// Unset all of the session variables
$_SESSION = array(); 
// Destroy the session.
session_destroy();
echo"<script>alert('You have been logged out.')</script>";
?>
<!-- Header -->
<?php include "header.php"; ?>

<body>
    <center>
        <div class = "logout">
            <h1>You have been logged out.</h1>
            <a href = "landing.php"><button class = "logoutbtn">Return to Login</button></a>
        </div>
    </center>
</body>
</html>