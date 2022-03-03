<?php
  require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmission</title>
    <link rel="stylesheet" href="admin.css">
    <style>   
.cont {
    margin-top: 40px;
    left: 10%;
    font-size: 15px;
    background-color:transparent;
    color: dodgerblue;
    }
</style>
</head>
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
<div class="cont">    
<?php
    // Check connection */
    require_once "config.php";

//$result = $conn->query($sql);
$sql = "SELECT * FROM register";

if ($result = mysqli_query($conn,$sql)) {
    if(mysqli_num_rows($result) > 0){
            echo "<table border='1' width='100%'>
            <tr>
                        <th>Id</th>
                        <th>Username</th>                      
                        <th>Email</th>                        
                        <th>Mobile</th>
                        <th>Alternate Mobile Number</th>
                        <th>Address</th>
                        <th>District</th>
                        <th>State</th> 
                        <th>Nation</th>
                        <th>Pin</th>
                      
            </tr>";

  
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $bg_color = "black";
        echo "<tr style='color: ".$bg_color. ";'>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["username"]."</td>"; 
            echo "<td>" . $row["email"]. "</td>";
			echo "<td>" . $row["mobile"]."</td>";
			echo "<td>" . $row["amobile"]."</td>";
            echo "<td>" . $row["address"]."</td>";
            echo "<td>" . $row["district"]."</td>";
            echo "<td>" . $row["state"]."</td>";
            echo "<td>" . $row["nation"]."</td>";
            echo "<td>" . $row["pin"]."</td>";
            echo "</tr>";
    }
 echo "</table>";
    }
    
}
 else {
    echo "0 results";
}

$conn->close();
?>
</div>


</body>
</html>