<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

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
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Some common FAQs</h1>
</div>

<section class="services">

   <h1 class="heading-title"> Click to Display </h1>

   <div class="box-container">

      <div class="box">
         <form action="Guide_output.php" method="post">
         <h3>Most Expensive Tourist Site</h3><br>
         <input type="submit" name="exp" value="Display" class="btn">
      </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
      <h3>Most Economical Package</h3><br>
         <input type="submit" name="eco" value="Display" class="btn">
         </form>
      </div>
      
      <div class="box">
      <form action="Guide_output.php" method="post">
      <h3>Most Popular Tourist Sites</h3><br>
         <input type="submit" name="visited" value="Display" class="btn">
         </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
      <h3>Know how People rate us</h3><br>
         <input type="submit" name="rt" value="Display" class="btn">
         </form>
      </div>

      <div class="box">
      <form action="Guide_output.php" method="post">
      <h3>Know the Destinations</h3><br>
         <input type="submit" name="dt" value="Display" class="btn">
         </form>
      </div>


   </div>

</section>