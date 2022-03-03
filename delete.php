<?php
 // include database connection file
include_once("config.php");
// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$sql="DELETE FROM landingimage WHERE id=$id";
$result = mysqli_query($conn, $sql);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:banner.php");
?>






<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$sql="DELETE FROM image WHERE id=$id";
$result = mysqli_query($conn, $sql);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:banner.php");
?>