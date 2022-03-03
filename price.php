<?php
  require_once 'config.php';
?>

<!-- Header -->
  <?php include "admin_header.php"; ?>
<body>
<!-- Navigation -->
<center>
	 <a href="#"><img src="logo.jpeg" alt="Logo" id="logo"></a>
		<nav class="nav">
		    <ul>
  				  <li><a href="banner.php">BANNER</a></li>
					  <li><a href="userdetails.php">USER DETAILS</a></li>
					  <li><a href="Read.php">BOOKING</a></li>
					  <li class="active"><a href="price.php">PRICE</a></li>
					  <li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>	
</center>
    <div class="price-container">
        <label>EVENT NAME</label><br>
            <select>
                <option value="none">NONE</option>
                <option value="evn_2">Event-2</option>
                <option value="evn_3">Evwnt-3</option>
                <option value="evn_4">Event-4</option>
                <option value="evn_5">Event-5</option>
                <option value="evn_6">Event-6</option>
                <option value="evn_7">Event-7</option>
            </select>
        <label class="details">FOOD</label><br>
            <select>
                <option value="none">NONE</option>
                <option value="veg">Veg</option>
                <option value="nonveg">Nonveg</option>
                <option value="both">Both veg & nonveg</option>
            </select>
    </div>

</body>
</html>