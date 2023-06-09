<?php
$name  = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$job = $_POST['job'];
$message = $_POST['message'];

if( !empty($name) || !empty($email) || !empty($mobileno) || !empty($address) ||!empty($job) || !empty($message))
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
    $SELECT = "SELECT email From jobregister where email = ? Limit 1";
    $INSERT = "INSERT Into jobregister( name, email, mobileno, address, qualification, job, message) values(?,?,?,?,?,?,?)";

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
        $stmt->bind_param('sssssss', $name,$email,$mobileno,$address,$qualification,$job,$message);
        $stmt->execute();

        header('Location:../order.php');

    }
        else
        {
            echo "Your application not submitted successfully";            
        }
        $stmt->close();
        die();
}

?>