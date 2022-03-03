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
<?php include "header.php"; ?>

<body>
    
    <script>
        var cityObject = {
            "JHAJHA": {
                "HOTEL-1": [],
                "HOTEL-2": [],
                "HOTEL-3": []
            },
            "DEOGHAR": {
                "HOTEL-1.1": [],
                "HOTEL-1.2": []
            }
        }
        window.onload = function () {
            var citySel = document.getElementById("city");
            var hotelsSel = document.getElementById("hotels");

            for (var x in cityObject) {
                citySel.options[citySel.options.length] = new Option(x, x);
            }
            citySel.onchange = function () {
                //empty HOTELS-dropdowns
                hotelsSel.length = 1;
                //display correct values
                for (var y in cityObject[this.value]) {
                    hotelsSel.options[hotelsSel.options.length] = new Option(y, y);
                }
            }
        }
    </script>

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
    <center>
        <div class="booking-container">
            <div class="title">BOOKING</div>
            <form  action="">
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" placeholder="Enter Your Id" required>
                    </div>
                    <div class="sel-opt">
                        <label class="details">EVENT NAME</label><br>
                        <select>
                            <option value="none">NONE</option>
                            <option value="evn_2">Event-2</option>
                            <option value="evn_3">Evwnt-3</option>
                            <option value="evn_4">Event-4</option>
                            <option value="evn_5">Event-5</option>
                            <option value="evn_6">Event-6</option>
                            <option value="evn_7">Event-7</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="details">EVENTS STARTING DATE</label>
                        <input type="date" placeholder="Events Starting Date" required>
                    </div>
                    <div class="input-box">
                        <label class="details">EVENTS END DATE</label>
                        <input type="date" placeholder="Events End Date" required>
                    </div>
                    <div class="input-box">
                        <label class="details">EVENTS THEM</label>
                        <input type="text" placeholder="Events Them" required>
                    </div>
                    <div class="input-box">
                        <label class="details">EVENT DURACTION</label>
                        <input type="text" placeholder="Events Duraction" required>
                    </div>
                    <div class="input-box">
                        <label class="details">VENUE NAME</label>
                        <input type="text" placeholder="Venue Name" required>
                    </div>

                    <div class="sel-opt">
                        <label class="details">VENUE LOCATION</label><br>
                        <select name="city" id="city">
                            <option value="" selected="selected">Select City</option>
                        </select><br>
                        <select name="hotels" id="hotels">
                            <option value="" selected="selected">Please select Hotels</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label class="details">CONTACT NUMBER</label>
                        <input type="text" placeholder="Contact Number" required>
                    </div>
                    <div class="input-box">
                        <label class="details">AADHAAR NUMBER</label>
                        <input type="int" placeholder="Aadhar number" required>
                    </div>
                    <div class="sel-opt">
                        <label class="details">FOOD</label><br>
                        <select>
                            <option value="none">NONE</option>
                            <option value="veg">Veg</option>
                            <option value="nonveg">Nonveg</option>
                            <option value="both">Both veg & nonveg</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label class="details">DECORATION</label>
                        <input type="text" placeholder="Decoration" required>
                    </div>

                </div>
                <div class="but">
                    <input type="submit" value="Booked">
                </div>
            </form>
        </div>
    </center>
<!-- Footer -->
<?php include "footer.php"; ?>
</body>
</html>