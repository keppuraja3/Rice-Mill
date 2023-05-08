<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Requirements</title>
    <link rel="website icon" type="png" href="images/CompanyLogo.png">
    <link rel="stylesheet" href="css/Stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    select, input{
        border: 1px solid #000 ;
    }
</style>
<body>
<!-- navbar sections starts  -->    
<?php include_once('data/header.php') ?>
<!-- navbar sections end  -->
<div style=" margin-top: 130px;"></div>

<!--Job Form start -->
<div align="center">
<div id="form" class="jform" 
style="background-color: yellow; border-radius: 8%; width: 60vh; margin-bottom: 8vh; border: 1px solid #000;">
    <h1 style="padding: 10px; margin: 15px;">JOB APPLICATION</h1>
<form action="data/job_register.php" name="jform" method="post">

    <input style="margin: 20px; padding: 10px; border-radius: 10px;" name="name" placeholder="Your Name" type="text" required><br>
    <input style="margin: 20px; padding: 10px; border-radius: 10px;" name="email" placeholder="Your Email" type="email" required><br>
    <input style="margin: 20px; padding: 10px; border-radius: 10px;" name="mobileno" placeholder="Mobile No" type="number" inputmode="numeric" required><br>
    <br>
    <textarea name="address" placeholder="Address" style="width: 20rem; height: 7rem;"></textarea><br>

    <select name="qualification" style="margin: 20px; padding: 10px; border-radius: 10px;" required>
        <option value="Select">--Select Qualification--</option>
        <option value="Below 10th">Below 10th</option>
        <option value="Above 10th">Above 10th</option>
        <option value="Degree Holder">Degree Holder</option>
        </select>
        <br>
    <select name="job"  style="margin: 20px; padding: 10px; border-radius: 10px;" required>
        <option value="Select">--Select--</option>
        <option value="Security">Security</option>
        <option value="Labour">Labour</option>
        <option value="Manager">Manager</option>
        </select><br>
    <textarea name="message" placeholder="Type any messages you want" style="width: 20rem; height: 7rem;">
    </textarea><br>
    <input type="submit" class="btn" name="submit" value="SUBMIT" style="margin-bottom: 20px;">
    <input type="reset" class="btn" name="reset" value="RESET" style="margin-bottom: 20px;">
</form>
</div>
</div>
<!--Job Form end -->

<!-- footer section starts  -->
<?php include_once('data/footer.php') ?>
<!-- footer section ends -->
<script src="js/main.js"></script>
</body>
</html>