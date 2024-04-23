<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutimg.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Interactive Computer Private Ltd are the Authorized Distributors of international brands such as Aorus, Gigabyte, Thermaltake, Toshiba and many more </p>
         <p>Established in 1997 A.D. and Located in Newroad of Kathmandu our services has expanded in Chitwan area and deliver quality and original authorised products all over Nepal</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/min.jpg" alt="">
         <p>As expected of the authorised seller of Gigabyte product in Nepal, I made a custom pc quotation from Gigabyte GPU and AORUS CPU here and the pc is delivering more than i expected!! </p>
       
         <h3>Minnie N.</h3>
      </div>

      <div class="box">
         <img src="images/cris.jpeg" alt="">
         <p>I recently bought a Lenono y700 gaming laptop from here and to check the credibility of the authorised product and went to lenobo website, it was certified to be original. Other businesses sell refurbished products but this place truly delivers original ones. </p>
       
         <h3>Cristiano Ronaldo</h3>
      </div>

      <div class="box">
         <img src="images/jihyop.png" alt="">
         <p>I bought a custom pc from here with specs as the monster RTX 4060, Thermaltake cpu, toshiba hdd and Gigabyte ssd. Worth the money indeed! no complaints!! </p>
        
         <h3> P. Jihyo  </h3>
      </div>

      <div class="box">
         <img src="images/vini.jpg" alt="">
         <p>I bought a laptop from here and after a year they gave me free servicing! the laptop which they sold did not have any major complications during these times and the thermal paste used was original which even boosted my laptop after servicing.</p>
         
         <h3> Vini Jr.</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Genuine products! customer of here since i also frequent the computer business due to my occupation. not once did the products fail to deliver and a place where no refurbished ones are sold! </p>
         
         <h3>Sahaj S. </h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Very nice customer service and always have their back to the products they sell, no wonder this shop has lasted all these years.</p>
        
         <h3>Aay Raj </h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>