<!DOCTYPE html>
<html>
	 <head>
		<title>EVENTS MANAGEMENT FIRST HOME PAGE </title>
		
		<meta charset="UTF-8">
	    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin_nav.css">
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" type="text/css" href="admin.css">
		<style type="text/css">
				#wrapper{
					width: 50%;	  
				  	margin: 20px auto;	  
					border: 2px solid #dad7d7;	  
			  }	  
				form{	  
				  width: 50%;	  
				  margin: 20px auto;	  
			}
			form div{	  
				  margin-top: 5px;
			}	  
			  img{	  
				  float: left;	  
				  margin: 5px;	  
				  width: 280px;	  
				  height: 120px;	  
			  }	  
			  #img_div{  
				  width: 70%;	  
				  padding: 5px;	  
				  margin: 15px auto;  
				  border: 1px solid #dad7d7;	  
			  }	  
			  #img_div:after{	  
				  content: "";	  
				  display: block;	  
				  clear: both;	  
			  }	  
		  </style>
	 </head>
		 <body>
		 <center>
			<a href="#"><img src="logo.jpeg" alt="Logo" id="logo"></a>
			<nav class="nav">
				 <ul>
					  <li class="active"><a href="banner.php">BANNER</a></li>
					  <li><a href="userdetails.php">USER DETAILS</a></li>
					  <li><a href="read.php">BOOKING</a></li>
					  <li><a href="price.php">PRICE</a></li>
					  <li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>	
			</center>
    <div id="wrapper">
         <!-- <! specify the encoding type of the form using the 
                enctype attribute > -->
         <form method="POST" action="upload.php" enctype="multipart/form-data">
                  <input type="file" name="my_image" value="" />
            <div>
				<button type="submit" name="submit">
                UPLOAD
                </button>
            </div>
        </form>
    </div>
</body>
</html>