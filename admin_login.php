<?php
session_start();
require_once "config.php";

if
    ($_SERVER["REQUEST_METHOD"]=="POST")
{
    error_reporting (0);
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from login where username= '".$username."' AND password = '".$password."' ";

        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result);


        if($row["usertype"]=="admin"){
            header("location: admin/admin_nav.html");
        }
        else{
            echo"You have entered wrong Username or Password";
        }
}

?>