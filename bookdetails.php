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
    <div class="container">
        

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">EVENT NAME</th>
                    <th scope="col">EVENTS STARTING DATE</th>
                    <th scope="col">EVENTS END DATE</th>
                    <th scope="col">EVENTS THEME</th>
                    <th scope="col">EVENTS DURATION</th>
                    <th scope="col">VENUE NAME</th>
                    <th scope="col">VENUE LOCATION</th>
                    <th scope="col">CONTACT NUMBER</th>
                    <th scope="col">AADHAAR NUMBER</th>
                    <th scope="col">FOOD</th>
                    <th scope="col">DECORATION</th>
                </tr>
            </thead>

            <tbody>


                <?php 
                $sql="Select * from `booking_d`";   #  WHERE username = '$username'"   Insert table name here(``) in the database
                error_reporting (0);
                $result=mysqli_query($conn,$sql);
                if ($result) {
                    while ($row=mysqli_fetch_assoc($result)) {
                      $id=$row['id'];

                      $eventname=$row['eventname'];

                      $eventstartingdate=$row['eventstartingdate'];

                      $eventenddate=$row['eventenddate'];

                      $eventtheme=$row['eventstheme'];

                      $eventduration=$row['event_duration'];

                      $venuename=$row['venuename'];

                      $venuelocation=$row['venuelocation'];

                      $contactnumber=$row['contact_number'];

                      $aadhaarnumber=$row['aadhaarnumber'];

                      $food=$row['food']; 

                      $decoration=$row['decoration'];

                      echo '<tr>
                      <th scope="row">'.$id.'</th>
                      <td>'.$eventname.'</td>
                      <td>'.$eventstartingdate.'</td>
                      <td>'.$eventenddate.'</td>
                      <td>'.$eventtheme.'</td>
                      <td>'.$eventduration.'</td>
                      <td>'.$venuename.'</td>
                      <td>'.$venuelocation.'</td>
                      <td>'.$contactnumber.'</td>
                      <td>'.$aadhaarnumber.'</td>
                      <td>'.$food.'</td>
                      <td>'.$decoration.'</td>

                      
                  </tr>';
                    }
                }
                
                
                
                ?>    

            </tbody>
        </table>
    </div>
    <!-- Footer -->
        <?php include "footer.php"; ?>
</body>
</html>