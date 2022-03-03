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
					  <li class="active"><a href="index.php">BANNER</a></li>
					  <li><a href="userdetails.php">USER DETAILS</a></li>
					  <li><a href="Read.php">BOOKING</a></li>
					  <li><a href="price.php">PRICE</a></li>
					  <li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>	
</center>
<fieldset>
 <legend><h4>Home Page Image</h4></legend>
   
	<div class="banner">
		<div class="ImageUploading">	
	<?php
		$sql = "SELECT * FROM image ORDER BY id DESC";
		$res = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($res)>0){
			while($images = mysqli_fetch_assoc($res)){ ?>
			
		
			<fieldset>	<img src="uploads/<?=$images['image_url']?>">
	
               <?php  echo "<a href='delete.php?id=$images[id]' id='delete'>Delete</a>"; ?>
			</fieldset>
			<?php } } ?>
 
      <?php if(isset($_GET['error'])): ?>
	     <p> <?php echo $_GET['error']; ?> </p>
      <?php endif ?> </div>
        <div class="ImageUploading">
<center>
	<div class="img-form">   <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <input type="file" name="my_image" value="" />
				    <button type="submit" name="submit">UPLOAD</button>
            </form></div>
		</center>
        </div></div>
   </fieldset>

		<!-- landing.php started-->
		<fieldset><legend><h4>Landing Page</h4></legend>
		<div class = "banner">
			<div class="ImageUploading">
	<?php
		$sql = "SELECT * FROM landingimage ORDER BY id DESC";
		$res = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($res)>0){
			while($images = mysqli_fetch_assoc($res)){ ?>
			 
				<fieldset><img src="landing/<?=$images['image']?>">

               <?php  echo "<a href='delete.php?id=$images[id]'>Delete</a>"; ?>
			</fieldset>
			<?php } } ?>
        
      <?php if(isset($_GET['error'])): ?>
	     <p> <?php echo $_GET['error']; ?> </p>
      <?php endif ?>
	  </div>
			<div class="ImageUploading">

   <center>
         <div class="img-form"> <form method="POST" action="landingupload.php" enctype="multipart/form-data" id="uploading">
                    <input type="file" name="my_image" value="" />
				    <button type="submit" name="submit">UPLOAD</button>
            </form></div> 
	  </center>
        </div>	
    </div></fieldset>
 </body>
</html>