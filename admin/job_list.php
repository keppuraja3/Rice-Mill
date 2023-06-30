<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>Job Request Database</title>
<link rel="stylesheet" href="../css/Stylesheet.css">
<link rel="website icon" href="../images/CompanyLogo.png">
<style>
table {
border-collapse: collapse;
width: 85vw;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
padding: 1rem;
border: 2px solid black;
}
td{
    margin: 1rem; padding: 1rem;
    background: #d7d380;
    border: 2px solid black;
}
tr:nth-child(even) {background-color: #f2f2f2}
.center{
    margin-top: 20vh;
    align-items: center;
    width: 100vw;
    display: grid;
    justify-content: center;
}
.center h1{
    text-align: center;
    margin: 2rem;
}
.center a{
    margin: 2rem; padding: .5rem;
    background-color: #2ef319;
    border-radius: 2rem;
    border: 2px solid #000;
    width:max-content
}
.center span a{
    margin: 2rem; padding: .5rem;
    background-color: red;
    border-radius: 2rem;
    border: 2px solid #000;
    width:100px;
    position: sticky;
} 
</style>
</head>
<body>


<!-- navbar sections starts  -->
<?php include_once('header.php') ?>

<!-- navbar sections end  -->
<div class="center">
    <h1>JOB APPLY LIST</h1>
    <span><a href="../login.php"><i class="fa fa-lock"></i>&emsp;LOG OUT</a></span>
    <a href="order_list.php"><i class="fa fa-bars"></i>&emsp;ORDER LIST</a>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile No</th>
<th>Address</th>
<th>Qualification</th>
<th>Job Post</th>
<th>Message</th>
<th>Date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ricecompany");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, email, mobileno, address, qualification, message, date, job FROM jobregister";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["id"]. "</td>
<td>" . $row["name"] . "</td>
<td>" . $row["email"]. "</td>
<td>" . $row["mobileno"]. "</td>
<td>" . $row["address"]. "</td>
<td>" . $row["qualification"]. "</td>
<td>" . $row["job"]. "</td>
<td>" . $row["message"]. "</td>
<td>" . $row["date"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<!-- footer  -->
<?php include_once('footer.php') ?>
<!-- footer  -->

</body>
</html>