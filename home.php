<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

   <style>
      .advent{
   display: inline-block;
   background: var(--black);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1.5rem;
   padding:1rem 3rem;
   cursor: pointer;
}
.advent:hover{
   background: purple;
}

#a{
   font: white;
}

   </style>

</head>
<body>

<section class="header">

   <a href="home.php" class="logo">Flavour of Travel</a>

   <nav class="navbar">
      <a href="Admin.php">Admin</a>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="rating.php">Give Rating</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="home">


         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="front">
               <h1 class="a" style="font-size:90px;">explore, discover, travel<h1>
               <p class="a" style="font-size:70px; font-color:white;">Travel With Us Now</p>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

</section>


<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <form action="Guide_output.php" method="post">
         <img src="images/icon-2.png" alt="">
         <input type="submit" name="guide" value="tour guides" class="btn">
      </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
         <img src="images/icon-1.png" alt="">
         <input type="submit" name="all" value="All Adventure" class='advent'>
         </form>
      </div>
      
      <div class="box">
      <form action="Guide_output.php" method="post">
         <img src="images/icon-3.png" alt="">
         <input type="submit" name="trekking" value="Trekking" class="btn">
         </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
         <img src="images/icon-4.png" alt="">
         <input type="submit" name="campfire" value="Camp Fire" class="btn">
         </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
         <img src="images/icon-5.png" alt="">
         <input type="submit" name="offroad" value="Off Road" class="btn">
         </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
         <img src="images/icon-6.png" alt="">
         <input type="submit" name="camping" value="Camping" class="btn">
         </form>
      </div>

   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p> Flavour of Travel is a full-service travel agency that specializes in creating custom travel experiences for its clients. Whether you’re looking for a romantic getaway, a family vacation, or an adventurous trip, Allure Travel can help make it happen.</p>
      <a href="about.php" class="btn">read more</a>&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="faq.php" class="btn">FAQs</a>
   </div>

</section>

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

   <div class="box">
                <div class="image">
                    <img src="images/nainital.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nainital</h3>
                    <p>Nainital is famous for the Naini Lake, the amazing view and the pleasant weather.You can find
                        restaurants, offices and hotels all located in the Mall.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/jaipur.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jaipur</h3>
                    <p>Renowned globally for its coloured gems,The Pink City, Jaipur is home to a large number of
                        marvellous forts, gorgeous palaces and magnificent temples. </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/trivand.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chennai</h3>
                    <p>Ancient temples, vibrant arts, natural wonders and a bustling culinary scene make Chennai, the
                        capital of Tamil Nadu, one of the most popular tourist destinations in the southern fringes of
                        the country.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Travel now to avail the offer</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> FlavourofTravel@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Delhi, india - 110047 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"><span>Flavour of Travel&trade;</span> | all rights reserved! </div>

</section>

<script src="js/script.js"></script>

</body>
</html>