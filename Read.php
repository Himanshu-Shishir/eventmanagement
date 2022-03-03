<?php
  require_once 'config.php';
?>

<!-- Header -->
<?php include "admin_header.php"; ?>
<body>
        <center>
			<a href="#"><img src="logo.jpeg" alt="Logo" id="logo"></a>
			<nav class="nav">
				 <ul>
					  <li class="active"><a href="admin_nav.html">BANNER</a></li>
					  <li><a href="userdetails.php">USER DETAILS</a></li>
					  <li><a href="Read.php">BOOKING</a></li>
					  <li><a href="price.php">PRICE</a></li>
					  <li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>	
        </center>
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
                $sql="Select * from `booking_d`" ;   #  Insert table name here(``) in the database
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

                      <td>
                        <button class="btn btn-success"><a href="#" class="text-light">Confirm</a></button>

                        <button class="btn btn-danger"><a href="#" class="text-light">Delete</a></button>
                    </td>       
                  </tr>';
                    }
                }
            ?>                      
            </tbody>
        </table>
    </div>
</body>
</html>