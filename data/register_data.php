<?php
$name  = $_POST['name'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];

if( !empty($name) || !empty($password)|| !empty($user_type) || !empty($mobileno) || !empty($email))
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
else{
    $SELECT = "SELECT email From login where email = ? Limit 1";
    $INSERT = "INSERT Into login( name, password, user_type, mobileno, email) values(?,?,?,?,?)";

    //prepare statement   
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $rnum = $stmt->num_rows;

    //checking username
    if ($rnum==0) 
    {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param('sssss', $name,$password,$user_type,$mobileno,$email);
        $stmt->execute();

        echo "Your application submitted successfully";
    }
        else{
            echo "Something is wrong please check";}
        $stmt->close();
        die();
}

?>