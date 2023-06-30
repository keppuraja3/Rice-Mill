<?php

$email = $_POST['email'];
$password = $_POST['password'];
if( !empty($name) || !empty($email) || !empty($password) ||!empty($job) || !empty($user_id))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ricecompany";
}

//connection
$conn = new mysqli($host, $dbusername, $dbpassword,$dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
}

    $SELECT = "SELECT email From login where email = ? Limit 1";

$sql = "SELECT email,password from ricecompany";
$refult = $conn-> query($sql);

// if
// {
//     $email = $_POST['email'] && $password = $
// }
// else
// echo "Invalid Email or Password";
?>