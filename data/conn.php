<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "ricecompany";

// if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
// {
//     die("Failed to connect!");
// }



$con=mysqli_connect("localhost", "root", "", "ricecompany");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}


?>
