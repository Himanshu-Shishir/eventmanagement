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

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    $sql = "INSERT INTO contact(fullname,email,message) VALUES ('$fullname','$email','$message')"; 
    $result = mysqli_query($conn,$sql);
    if($result) 
        echo"Submitted successfully";
    else
        echo "The record was not inserted successfully";
        $conn->close();
    }
?>


<!-- Header -->
<?php include "header.php"; ?>

<body>
    <div class="flex-container1">
        <a href="index.php"><img class="flex-item1" src="logo.jpeg"></a>  
        <div class="flex-item2">
            <a class="active" href="index.php">HOME</a>
            <a href="booking.php">BOOKING</a>
            <a href="About_event.php">ABOUT</a>
            <a href="contact.php">CONTACT</a>
            <div class="dropdown">
                <a>SETTING</a>
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
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Esse incidunt iure rerum debitis reiciendis veniam tempore
            </p>
        </div>
        <div class="contact_container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Castair Town,<br>B.Deoghar,<br>814112</p>

                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone"></i> </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>6201970801</p>

                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>himanshushishir0908@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="contact.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="fullname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">           
                        <input type="text" name="message" required="required">
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
   <!-- Footer -->
        <?php include "footer.php"; ?>
</body>

</html>