<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/Stylesheet.css">
    <link rel="website icon" type="png" href="images/CompanyLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body style="padding:0; margin:0; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <?php include_once('data/header.php') ?>
    <div class="slides">
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="images/banner1.jpg" alt="banner1"></div>
        <div class="swiper-slide"><img src="images/banner2.jpg" alt="banner2"></div>
        <div class="swiper-slide"><img src="images/banner3.jpg" alt="banner3"></div>
        <div class="swiper-slide"><img src="images/banner4.jpg" alt="banner4"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
    </div>

<!-- loader code start -->
<div class="center1">
    <div class="loader"><i class="fa fa-spinner" aria-hidden="true" style="height: 200px;"></i></div>
</div>
<!-- loader code end -->

<!-- company details in para start -->
<h1 style="text-align: center;">OUR COMPANY DETAILS</h1><br>
<div class="param" >
<p class="p1">Our company Products tells our quality. Our first aim is customer satisfaction. 
    Rice quality & quantity is continued since in 50 years. <br>Company Manager, Office Workers, 
    Labours more importantly The Formers all are worked for this food.
</p><br><div class="pp">
<p class="p2">Our company Products tells our quality. Our first aim is customer satisfaction. 
    Rice quality & quantity is continued since in 50 years. Company Manager, Office Workers, 
    Labours more importantly The Formers all are worked for this food.Our company Products tells our quality. Our first aim is customer satisfaction. 
    Rice quality & quantity is continued since in 50 years. Company Manager, Office Workers, 
    Labours more importantly The Formers all are worked for this food.
</p></div><br>
<p class="p3">Our company Products tells our quality. Our first aim is customer satisfaction. 
    Rice quality & quantity is continued since in 50 years. Company Manager, Office Workers, 
    Labours more importantly The Formers all are worked for this food.
</p><br>
</div>
<!-- company details in para end -->

<!-- company owners info start -->
<div align = center>
<div class="owner">
    <div class="ownerinfo">
        <img src="images/avatar1.webp" alt="avatar1">
    <h1>Mr.RAJA</h1> <h3>CEO</h3></div>
    <div class="ownerinfo">
        <img src="images/avatar2.jpg" alt="avatar2">
    <h1>Mr.Kumar</h1> <h3>Managing Directer</h3></div>
    <div class="ownerinfo">
        <img src="images/avatar3.jpg" alt="avatar3">
    <h1>Mr.Suraj</h1> <h3>Labour Leader</h3></div>
</div></div>
<!-- company owners info end -->

<!-- terms start -->
<div class="term">
    <h1>Terms & Conditions</h1>
    <h3>You want to read the terms and conditions</h3>
    <a href="Terms.php">
    <button class="btn">READ</button></a>
</div>
<!-- terms end -->

<!-- footer section starts  -->
<?php include_once('data/footer.php') ?>
<!-- footer section ends -->
    <!-- javascript code start -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    
    setTimeout(function(){$('.loader').fadeToggle(); }, 1500);

    const swiper = new Swiper('.swiper', {
        autoplay:{
        delay: 3000,
        disableOnInteraction: false,},
        loop: true,
        pagination: {el: '.swiper-pagination',},
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',},
});
</script>
<!-- javascript code end -->

</body>
</html>