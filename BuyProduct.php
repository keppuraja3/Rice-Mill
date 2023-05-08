<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
    <link rel="website icon" type="png" href="images/CompanyLogo.png">
    <link rel="stylesheet" href="css/Stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <style>
.buy-con:hover{
    box-shadow: 0 3px 6px  rgb(0, 0, 0.16), 0 3px 6px rgb(0, 0, 0.23);
    transform: translate(0px, -8px);}
.buy-con img{
    height: 40vh; 
    width: 15rem;
    text-align: center;
}
.buy-con button{
    display: grid;
    text-align: center;
    margin-bottom: 0;
}
.buy-con{
    height: 60vh;
    width: 30vh;
    margin: 15px;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
    text-align: center; float: left;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    display: block;
    box-shadow: 0 10px 18px rgba(68, 66, 66, 0.363),0 10px 10px rgb(0, 0, 0.22);
    transition: .4%;
    background: #eee;
    justify-content: center;
    align-items: center;
}
.buy-con p{
    text-align: center;
    color: #b2becb; padding-top: 0 80px;
}
.buy-con .bttn{
    margin: 1rem;
    font-weight: 400;
    padding: .5rem;
    border-radius: .5rem;
    width: 50px; height: 4.5rem;
    color: rgb(255, 255, 255);
    background-color: rgb(0, 157, 255);
    align-items: center; justify-content: center;
}
.bttn:hover{
    font-weight: 700;
    color: rgb(0, 0, 0);
    background-color: transparent;
    border: 2px solid rgb(0, 81, 255);
}
    </style>
 <!-- navbar sections starts  -->
 <?php include_once('data/header.php') ?>
<!-- navbar sections end  -->
<div style=" margin-top: 130px;"></div>
<marquee behavior="alternate" direction="left" >

<!-- Image Gallery Start-->
    <div class="buy-con">
        <h1>Boiled Rice</h1>
        <img src="images/ricebag-w.png" alt="ricebag">
        <p>Boiled Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹1200.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button align = center style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Biriyani Rice</h1>
        <img src="images/ricebag-z.png" alt="ricebag">
        <p>Biriyani Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹2880.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">        
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Ponni Rice</h1>
        <img src="images/ricebag-y.png" alt="ricebag">
        <p>Ponni Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹800.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Idly Rice</h1>
        <img src="images/ricebag-x.png" alt="ricebag">
        <p>Idly Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹1500.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>
</div>
</marquee>


<marquee behavior="alternate" direction="right" style="margin-top: 2rem;">
    <div class="buy-con">
        <h1>Boiled Rice</h1>
        <img src="images/ricebag-a.png" alt="ricebag">
        <p>Boiled Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹1200.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button align = center style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Biriyani Rice</h1>
        <img src="images/ricebag-b.png" alt="ricebag">
        <p>Biriyani Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹2880.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">        
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Ponni Rice</h1>
        <img src="images/ricebag-c.png" alt="ricebag">
        <p>Ponni Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹800.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>

    <div class="buy-con">
        <h1>Idly Rice</h1>
        <img src="images/ricebag-d.png" alt="ricebag">
        <p>Idly Rice Quality No.1 Brand</p>
        <h2 style="font-family: 'Times New Roman', Times, serif; font-weight: 900;">₹1500.00</h2>
        <ul class="star">
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
            <i> <i class="fa fa-star checked"></i></li>
        </ul><a href="BuyerDetails.php">
    <button style="width: 18rem;" type="button" class="bttn">Buy Now</button></a>
    </div>
</div>
</marquee>
<!-- Image Gallery End-->

<!-- footer section starts  -->
<?php include_once('data/footer.php') ?>
<!-- footer section ends -->
<script src="js/main.js"></script>

    </body>
</html>