<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: landing.php");
    exit;
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
    <div class="about">
        <h1>About Us</h1>
    </div>
    <div class="row">
        <div class="column">
            <img src="IMG_20211210_220446.jpg">

            <h2>Himanshu Shishir</h2>
            <h4>CEO</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur
                adipisicing elit.</p>
            <p>himanshushishir@gmail.com</p>
            <div class="about_social-links">
                <a href='http://www.facebook.com/'><i class=" fab fa-facebook-f"></i></a>
                <a href='#'><i class=" fab fa-twitter"></i></a>
                <a href='http://www.instagram.com/himanshu_shishir'><i class=" fab fa-instagram"></i></a>
                <a href='#'><i class=" fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="column">
            <img src="IMG_20211210_220446.jpg">

            <h2>Vivek Kumar</h2>
            <h4>CEO</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur
                adipisicing elit.</p>
            <p>vs1054745@gmail.com</p>
            <div class="about_social-links">
                <a href='#'><i class=" fab fa-facebook-f"></i></a>
                <a href='#'><i class=" fab fa-twitter"></i></a>
                <a href='http://www.instagram.com/'><i class=" fab fa-instagram"></i></a>
                <a href='#'><i class=" fab fa-linkedin-in"></i></a>
            </div>

        </div>
        <div class="column">
            <img src="IMG_20211210_220446.jpg">

            <h2>Prince Das</h2>
            <h4>CEO</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur
                adipisicing elit.</p>
            <p>princedas91303@gmail.com</p>
            <div class="about_social-links">
                <a href='#'><i class=" fab fa-facebook-f"></i></a>
                <a href='#'><i class=" fab fa-twitter"></i></a>
                <a href='http://www.instagram.com/'><i class=" fab fa-instagram"></i></a>
                <a href='#'><i class=" fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>
    <!-- Footer -->
        <?php include "footer.php"; ?>
</body>

</html>