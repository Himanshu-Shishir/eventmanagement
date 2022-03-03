<?php 
require_once "config.php";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: landing.php");
    exit;
}
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $subject = $_POST['subject'];
    $sql = "INSERT INTO subject (subject) VALUES ('$subject')"; 
    $result = mysqli_query($conn,$sql);
    
    if ($result)
	    echo "Successfully inserted ";
    else
	    echo "Something Went Wrong ";
   
$conn->close();
}
?>

<!-- Header -->
<?php include "header.php"; ?>
<body>
    <div class="flex-container1">
        <a href="index.php"><img class="flex-item1" src="logo.jpeg"></a>  
        <div class="flex-item2">
            <a href="index.php">HOME</a>
            <a href="booking.php">BOOKING</a>
            <a href="About_event.php">ABOUT</a>
            <a href="contact.php">CONTACT</a>
            <div class="dropdown">
                <a class="active" >SETTING</a>
                <div class="dropdown-content">
                    <a href="bookdetails.php">Booking Details</a>
                    <a href="terms_conditions.php">Terms and Conditions</a>
                    <a href="theme.php">Theme</a>
                    <a href="feedback.php">Feedback</a>
                    <a href="logout.php">Log Out</a>
                </div>
              </div>
        </div>
    </div>
    <div class="feedback_container">
        <form action="" method="POST">
            <p style="text-align: center;">How can we improve?</p>
            <textarea id="subject" type="text" name="subject" placeholder="Please provide your feedback here" class="feedback"
                style="height: 200px;" required></textarea>
            <button type="submit" class="feedback_submit" value="SUBMIT">SUBMIT</button>
        </form>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>