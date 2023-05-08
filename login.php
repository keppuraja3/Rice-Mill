
<?php

include("data/conn.php");
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$get_admin="select * from login where name='$name' and password='$password'";
	$run_admin=$con->query($get_admin);
	$cou_admin=mysqli_num_rows($run_admin);
	if($cou_admin>0)
	{
		while($row_admin=mysqli_fetch_array($run_admin))
		$_SESSION['name']=$row_admin['name'];
		echo "<script>window.open('admin/job_list.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('invalid username or password')</script>";
	}
}
?>
<html>
<head>
  <style>
  body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background-image:url("images/background.jpg");
	background-position:center;
	background-size:100%;
	background-color: green;
	background-repeat:no-repeat;
	text-decoration: none;
  }
  .box{
	position:absolute;
	top:50%;
	left:20%;
	transform:translate(-50%,-50%);
	width:400px;
	backdrop-filter: blur(3px);
	padding:40px;
	text-align: center;
	box-sizing:border-box; 
	
	border-radius: 1rem;
	border:3px solid rgba(0,0.2,0,.1);
	box-shadow: 11px 14px 17px 12px rgba(0,0,0,.2);
  }
  .box h2{
	margin:0 0 40px;
	padding:0;
	color:#ff0053;
	text-transform:uppercase;
	text-align:center;
	text-shadow: 0px 4px 3px #080808bd;
  }
  .box input{
	padding:10px 0;
	margin-bottom:30px;
	border-radius: 1rem;
  }
  .box input,.box textarea{
	width:100%;
	box-sizing:border-box;
	box-shadow:none;
	outline:none;
	border:none;
  }
  .box input[type="submit"]{
	cursor:pointer;
	background: linear-gradient(38deg, #0099ff, rgba(0,0.2,0,.1), #ff0053);
    border: 1px solid #000;
	color:#fff;
	margin-bottom:0;
	text-transform:uppercase;
  }
  .box form div{
	position:relative;
  }
  #en{
  border-radius:5px;
  position:absolute;
  top:90px;
  left:400px;
  height:500px;background:white;
  width:40%;	
  opacity:.6;
  }
  input[type=text]:hover, input[type=password]:hover, span:hover  
  {
	font-size:15px;
  font-weight:Bold;
	color:#0099ff;
  }input[type=submit]:hover{
	border: 2px solid #000;
	color: #000;
	font-weight: 500;
	background: transparent;
  }

  .box span{
	padding: .5rem; margin: .5rem;
	display: block;
	color: #ff0053;
	text-decoration: none;
  }
  .box a{
	text-decoration: none;
	color: #000;font-weight:900;
	text-align: center;
	font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  </style>

 <link rel="website icon" href="images/CompanyLogo.png">
</head>

<body>
<div class="box">
<h2>ADMIN</h2>
<form method="post">
<div>
<input type="text" name="name"  placeholder=&emsp;USERNAME required>
</div>
<div>
<input type="password" name="password"  placeholder=&emsp;PASSWORD required>
</div>
<input type="submit"  name="submit" value="login">
<!-- 

<span class="pull-right"> <a href="register.php"> Forgot Password?</a></span> -->

<span><a href="Home.php" >Back to Home page</a></span>

</form>
</div>

</body>
</html>
