<?php
$name  = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$payment = $_POST['payment'];
$item_name = $_POST['item_name'];
$quantity = $_POST['quantity'];

if( !empty($name) || !empty($email) || !empty($mobileno)  || !empty($address) ||!empty($payment) || !empty($item_name) ||!empty($quantity))
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
    $SELECT = "SELECT email From order_list where email = ? Limit 1";
    $INSERT = "INSERT Into order_list ( name, email, mobileno, address, payment, item_name, quantity) values(?,?,?,?,?,?,?)";

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
        $stmt->bind_param('sssssss', $name,$email,$mobileno,$address,$payment,$item_name,$quantity);
        $stmt->execute();

        echo "Your application submitted successfully";
    }
        else{
            echo "Something is wrong please check";}
        $stmt->close();
        die();
}

?>