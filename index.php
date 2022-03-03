<?php
  require_once 'config.php';
?>
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
            <a href="index.php"><img class="flex-item1" src="062.jfif"></a>  
            <div class="flex-item2" id= "myTopnav">
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
                <a href= "javascript:void(0);" class= "icon" onclick = myFunction()>
                    <i class= "fa fa-bars"></i>
                </a>
            </div>
        </div>
        <div class="loggedin">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <h2>Your ID is <?php echo htmlspecialchars($_SESSION["id"]); ?>.</h2>
        </div>
        <?php  
        
        $sql="SELECT * FROM image WHERE hide=1";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($result)){
            $image=$row['image_url'];
    ?>
        <div class="slideshow-container">
            <div class="mySlides">
                <?php echo"<img src='..//admin/uploads/".$row['image_url']."'>"?>
            </div>
        </div>
        <?php } ?>
        <!-- Footer -->
        <?php include "footer.php"; ?>

        <script src= "slideshow.js"></script>
        <script>
            function myFunction(){
                var x = document.getElementById("myTopnav");
                if(x.className === "flex-item2"){
                    x.className += " responsive";
                }
                else{
                    x.className = "flex-item2";
                }
            }
        </script>
</body>
</html>