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
    <center>
  <!--- Light and Sound --->
  <div class="about_event"> 

    <div class="slide-container">      <div class="mySlides">
        <img src="tiard.jpg">
      </div>
      <div class="mySlides">
        <img src="Screenshot.png">
      </div>      
      <div class="mySlides">
        <img src="logo.jpeg">
      </div>      
      </div>
      <br> 
        <h2>Light & Sound</h2>
        <p>Light and Sound is very important role in the function. It makes your party or event 
                    very attractive and enjoying moment and it also looks very beautiful when you use lights.
                <label id="dots">...</label><label id="more">Without light and sound maybe your function looks empty 
                or something missing in it. So our responsibility is to make your event very special that you never 
                forget in your life. Our website helps you to make your function beautiful and never forget whatever 
                the event you choose. We will provide the best light and sound that make your party or your function 
                attractive. You just have to chose which type of light and sound variety you want in your event, 
                we will fully try to fulfill your requirements. In light:-  “LED Pixel Tube Light, LED uplights, 
                LED Batten, PAR Light, moving `Intelligent` light, Follow-spot, Laset Light, LED String lights, 
                pin-spot lighting, ballon lighting, wristband and lanyard lighting, projection lighting/mapping(3D), 
                high-lit tables, and the sound is according to your requirement too. 
                In sound:- 
                •	DJ Sound for event planning:
                Reverbations, attenuation, decibal, microphone, microphone mixer, amplifier amplified speakers, PA-system.
                •	Types of microphones:
                Corded microphone, wireless microphone, handheld microphone, head worn microphone, hydrophone, miniature 
                microphone, dynamic microphone.
                •	Function Band Performance:
                Headline performance, background music, roaming set, we will provide all type of sound too.
                Our website help you to select light and sound very eaily. We hope when you see our work you will be fully 
                satisfied. We try to make you smile. For your happiness we recommend you to add light as well as sound for 
                your event. Thank You.
                </label>
            </p>
            <a onclick="myFunction()" id="myBtn">Read more</a></div>
          <script src= "slideshow.js"></script>
</div>
<!---Decoration --->
<div class="about_event">

    <div class="slide-container">
      <div class="MySlides">
        <img src="tiard.jpg" >
      </div>
      
      <div class="MySlides">
        <img src="logo.jpeg">
      </div>
      
      <div class="MySlides">
        <img src="ram.jpeg">
      </div>      
      </div>
      <br>
   <h1>Decoration</h1>
   <p>
      Decoration is one of the most important thing in any type of function. 
      They accentuate the venue and the ceremony.<label id="dote">....</label> <label id="mor">
      According to the event different type of decoration apply. The decoration represents the type of 
      function happening and represents the beauty of event. Decoration changes the style of your party or we 
      say your event or function, without decoration you feel something missing. So you should apply the decoration 
      to your event. The type of decoration we do or provide are:- Ballon decoration, car decoration, room decoration, 
      flower decoration, kids party decoration. All given decoration is provided through our website. 
      It is so easy for you to select the decoration for your event by sitting anywhere. You just have to 
      full the booking form and you can book the decoration very easy way. We will fully try to help you 
      with every possible thing we can do.
</label>
 </p>
  <a  id="read" onclick="read()" >Read more</a>
      
      <script src= "decoration.js">
          </script>
</div>
<!---Caterring --->
<div class="about_event">

    <div class="slide-container">
      <div class="my_Slides">
        <img src="logo.jpeg">
      </div>
      
      <div class="my_Slides">
        <img src="Screenshot.png">
      </div>
      
      <div class="my_Slides">
        <img src="IMG_20211210_220446.jpg">
      </div>
      
      </div>
      <br>      

   <h1>Lorem ipsum</h1>
 <p>
  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sit praesentium sequi quis 
  blanditiis, debitis doloribus ad. <label id="dot">....</label> <label id="mo"> Perferendis inventore doloribus 
  veniam possimus, nemo, et
  dicta consectetur vitae non delectus optio! Lorem ipsum dolor, sit amet consectetur adipisicing elit.
  Recusandae voluptatibus vel praesentium! Numquam, tempore possimus velit ipsum
  veritatis eius saepe eligendi voluptas dignissimos exercitationem laboriosam odio adipisci vel at sequi.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum tempora odio eius natus? Eos fugit perferendis 
  et. Obcaecati ad culpa itaque dicta ipsam eligendi expedita cumque doloremque quos. Placeat, totam?</label>
 </p>
  <a  id="READ" onclick="fun()" >Read more</a>
        <script type="text/javascript" src= "caterring.js">        
        </script>
</div>
<!---Venue --->
<div class="about_event"> 

    <div class="slide-container">
      <div class="MYSlides">
        <img src="IMG_20211210_220446.jpg">
      </div>
      
      <div class="MYSlides">
        <img src="logo.jpeg">
      </div>
      <div class="MYSlides">
        <img src="Screenshot.png">
      </div>      
      </div>
      <br>

   <h1>Venue</h1>
   <p>
      The venue for an event or an activity is the place or 
      the location where it is going to happen. A venue is<label id="doot">....</label> <label id="m"> 
 
      also one of the important thing to select for any 
      function, i.e., which location is best for the event. 
      Many time we confuse to decide where our event 
      should happen and usually it takes three or four 
      days to decide the venue. But for now, don’t worry 
      we are here for you. We help you to choose the 
      location. Just fill the booking form. By using our 
      website you get the best hotels or halls. We try to 
      provide the best bars, pubs and clubs, restaurant, 
      conference centres, hotels, banquet halls, fields
      and arenas according to the city you choose. We 
      are the best venue provider to help you to choose 
      your venue very quickly.?</label>
  </p>
  <a  id="REad" onclick="f()" >Read more</a>
        <script type="text/javascript" src= "venue.js"></script>
</div>
        </center>
     <!-- Footer -->
        <?php include "footer.php"; ?>
</body>
</html>