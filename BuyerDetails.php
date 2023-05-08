<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <link rel="website icon" type="png" href="images/CompanyLogo.png">
    <link rel="stylesheet" href="css/Stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <!-- navbar sections starts  -->
    <?php include_once('data/header.php') ?>


    <!-- navbar sections end  -->
    <div style=" margin-top: 40px;"></div>

<div class="gimg">
    <img src="images/ricebag-w.png" alt="ricebag">
    <h1>Boiled Rice</h1>
    <p>Boiled Rice Quality No.1 Brand</p>
    <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹1200.00</h2>
    <ul class="star">
        <i> <i class="fa fa-star checked"></i></li>
        <i> <i class="fa fa-star checked"></i></li>
        <i> <i class="fa fa-star checked"></i></li>
        <i> <i class="fa fa-star checked"></i></li>
        <i> <i class="fa fa-star checked"></i></li>
    </ul>
    
</div>
<div class="buyform">
<form action="data/order_data.php" method="post">
    <span>Buy Product Details</span><br><br>
    Name<input type="text" name="name" placeholder="Enter Name"><br><br>
    Email<input type="email" name="email" placeholder="Enter Mail Id"><br><br>
    Mobile<input type="number" name="mobileno" placeholder="Enter Phone No"><br><br>
    Payment  <select name="payment" style="margin: 20px; padding: 10px; border-radius: 10px;">
        <option value="Select">--Payment Method--</option>
        <option value="Cash">Cash</option>
        <option value="Online">Online</option>
        </select><br><br>
    Item Name  <select name="item_name" style="margin: 20px; padding: 10px; border-radius: 10px;">
        <option value="Select">--Item Name--</option>
        <option value="Boiled Rice">Boiled Rice</option>
        <option value="Steam Rice">Steam Rice</option>
        <option value="Idly Rice">Idly Rice</option>
        <option value="Biryani Rice">Biryani Rice</option>
        <option value="Ponni Rice">Ponni Rice</option>
        </select><br><br>
    Quantity<input type="number" name="quantity" value="1" style="text-align: center;"><br><br>
    <a href="Order.html"><button type="submit" value="Order" class="btn" style="width: 20rem;">Order</button>
    <button class="btn" style="width: 20rem;" type="reset" value="reset">Reset</button>
</a><br><br>
</form>
</div>

<!-- footer section starts  -->
<?php include_once('data/footer.php') ?>
    <!-- footer section ends -->

    <script src="js/main.js"></script>
    </body>
</html> 